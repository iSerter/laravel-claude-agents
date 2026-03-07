# Laravel Claude Agents – Project context for AI

- **Commits**: Use [Conventional Commits](https://www.conventionalcommits.org/) for all commit messages (e.g. `feat:`, `fix:`, `docs:`, `chore:`). See `.cursor/rules/conventional-commits.mdc` for the full rule and examples.
- **Releases**: [Release Please](https://github.com/googleapis/release-please-action) runs on push to `main`. It opens/updates a Release PR that bumps `composer.json` version and updates `CHANGELOG.md` from conventional commits; merging that PR creates the git tag and GitHub release. For local or one-off version bumps, use `scripts/bump-version.sh [patch|minor|major] [--tag] [--commit]`.
