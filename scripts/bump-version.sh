#!/usr/bin/env bash
set -e

# Bump package version and optionally create a git tag.
# Usage: ./scripts/bump-version.sh [patch|minor|major] [--tag] [--commit]
#   patch (default): 1.2.3 -> 1.2.4
#   minor:           1.2.3 -> 1.3.0
#   major:           1.2.3 -> 2.0.0
#   --tag:            create git tag vX.Y.Z
#   --commit:         commit composer.json with message "chore(release): vX.Y.Z"

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
COMPOSER_JSON="$ROOT/composer.json"

# Parse arguments
BUMP="patch"
CREATE_TAG=false
DO_COMMIT=false
for arg in "$@"; do
  case "$arg" in
    patch|minor|major) BUMP="$arg" ;;
    --tag)   CREATE_TAG=true ;;
    --commit) DO_COMMIT=true ;;
    *)
      echo "Usage: $0 [patch|minor|major] [--tag] [--commit]"
      exit 1
      ;;
  esac
done

# Read current version: composer.json first, then latest git tag
current=""
if [[ -f "$COMPOSER_JSON" ]]; then
  current=$(php -r "
    \$j = json_decode(file_get_contents('$COMPOSER_JSON'), true);
    echo isset(\$j['version']) ? \$j['version'] : '';
  " 2>/dev/null || true)
fi
if [[ -z "$current" ]]; then
  current=$(git -C "$ROOT" tag -l 'v*' --sort=-v:refname 2>/dev/null | head -1)
  current="${current#v}"
fi
if [[ -z "$current" || ! "$current" =~ ^[0-9]+\.[0-9]+\.[0-9]+ ]]; then
  current="0.1.0"
fi

# Bump version
IFS=. read -r major minor patch <<< "$current"
case "$BUMP" in
  major) major=$((major + 1)); minor=0; patch=0 ;;
  minor) minor=$((minor + 1)); patch=0 ;;
  patch) patch=$((patch + 1)) ;;
esac
NEW_VERSION="$major.$minor.$patch"

# Update composer.json
php -r "
  \$path = '$COMPOSER_JSON';
  \$j = json_decode(file_get_contents(\$path), true);
  \$j['version'] = '$NEW_VERSION';
  file_put_contents(\$path, json_encode(\$j, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n");
"

echo "Bumped version to $NEW_VERSION (composer.json updated)."

if $CREATE_TAG; then
  git -C "$ROOT" tag "v$NEW_VERSION"
  echo "Created git tag v$NEW_VERSION."
fi

if $DO_COMMIT; then
  git -C "$ROOT" add composer.json
  git -C "$ROOT" commit -m "chore(release): v$NEW_VERSION"
  echo "Committed composer.json with chore(release): v$NEW_VERSION."
  if ! $CREATE_TAG; then
    git -C "$ROOT" tag "v$NEW_VERSION"
    echo "Created git tag v$NEW_VERSION."
  fi
fi

if ! $CREATE_TAG && ! $DO_COMMIT; then
  echo ""
  echo "Next steps:"
  echo "  1. Review and commit:  git add composer.json && git commit -m \"chore(release): v$NEW_VERSION\""
  echo "  2. Create tag:        git tag v$NEW_VERSION"
  echo "  Or run with --tag and/or --commit to do it automatically."
fi
