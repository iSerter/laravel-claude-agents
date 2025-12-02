# Contributing to Laravel Claude Agents

Thank you for your interest in contributing to Laravel Claude Agents! This document provides guidelines for contributing subagents, skills, and improvements.

## How to Contribute

### Types of Contributions

We welcome:
- **New Subagents** - Specialized Laravel experts (e.g., livewire-specialist, inertia-expert)
- **New Skills** - Reusable workflows and patterns (e.g., deployment-best-practices)
- **Improvements** - Enhancements to existing agents or skills
- **Documentation** - Better examples, use cases, and guides
- **Bug Reports** - Issues with existing agents or skills

## Creating New Subagents

### Subagent Structure

Each subagent should be a Markdown file in `.claude/agents/` with this structure:

```markdown
---
name: agent-name
description: Brief description of when this agent should be invoked (1-2 sentences)
tools: Read, Write, Edit, Bash, Glob, Grep
---

You are a [role description]...

## Core Responsibilities

When invoked:
1. Responsibility 1
2. Responsibility 2
...

## [Topic Area 1]

### Subtopic

Code examples and explanations...

## [Topic Area 2]

...

## Best Practices Checklist

- [ ] Item 1
- [ ] Item 2
...

## Integration with Other Agents

- Collaborate with **other-agent** on specific tasks
- Support **another-agent** for related work

Always [core principle or reminder]...
```

### Subagent Guidelines

**DO:**
- Focus on a specific Laravel domain (e.g., Livewire, Inertia, testing)
- Include practical code examples
- Provide checklists for verification
- Define clear integration points with other agents
- Use Laravel 10+ and PHP 8.2+ examples
- Follow Laravel coding standards
- Include both good and bad examples (✅/❌)

**DON'T:**
- Make agents too broad (split into multiple if needed)
- Include outdated Laravel versions
- Use deprecated PHP features
- Overlap significantly with existing agents
- Include personal opinions without backing

### Tool Selection

Choose appropriate tools based on agent role:

- **Read-only agents** (auditors, reviewers): `Read, Grep, Glob`
- **Code writers** (developers, architects): `Read, Write, Edit, Bash, Glob, Grep`
- **Analyzers** (optimizers, debuggers): `Read, Bash, Grep, Glob`

## Creating New Skills

### Skill Structure

Each skill should be in `skills/skill-name/SKILL.md`:

```markdown
---
name: skill-name
description: When to use this skill
---

# Skill Title

## Overview

Brief description of the skill...

## When to Use

- Use case 1
- Use case 2
...

## [Section 1]

### Subsection

Content with code examples...

## Checklist

- [ ] Item 1
- [ ] Item 2

## Remember

Key takeaways...
```

### Skill Guidelines

**DO:**
- Focus on reusable workflows or patterns
- Include step-by-step instructions
- Provide code examples
- Add verification checklists
- Make it actionable
- Reference related agents

**DON'T:**
- Duplicate content from agents
- Make it too specific to one project
- Include configuration that changes often
- Leave out critical steps

## Contribution Process

### 1. Fork and Clone

```bash
git clone https://github.com/YOUR-USERNAME/laravel-claude-agents.git
cd laravel-claude-agents
```

### 2. Create a Branch

```bash
git checkout -b feature/your-agent-name
# or
git checkout -b skill/your-skill-name
```

### 3. Make Your Changes

**For Subagents:**
```bash
# Create the agent file
touch .claude/agents/your-agent-name.md

# Edit with your favorite editor
vim .claude/agents/your-agent-name.md
```

**For Skills:**
```bash
# Create the skill directory and file
mkdir -p skills/your-skill-name
touch skills/your-skill-name/SKILL.md

# Edit the skill
vim skills/your-skill-name/SKILL.md
```

### 4. Test Your Changes

**Test in a Laravel Project:**
```bash
# Copy to a test Laravel project
cp -r .claude/agents ~/.claude/agents-test
cd /path/to/test-laravel-project

# Try using your agent or skill
# Verify it works as expected
```

**Verify Markdown Syntax:**
```bash
# Check for markdown issues
mdl .claude/agents/your-agent-name.md
# or
mdl skills/your-skill-name/SKILL.md
```

### 5. Update Documentation

**Update README.md:**
Add your agent or skill to the appropriate section in README.md.

**Add to EXAMPLES.md (optional):**
If your contribution benefits from an example, add one.

### 6. Commit Your Changes

```bash
git add .
git commit -m "Add [agent-name] subagent for [purpose]"
# or
git commit -m "Add [skill-name] skill for [purpose]"
```

### 7. Submit Pull Request

1. Push to your fork:
   ```bash
   git push origin feature/your-agent-name
   ```

2. Go to GitHub and create a Pull Request

3. Fill out the PR template:
   - Describe what you added
   - Explain why it's useful
   - Reference any related issues
   - Include testing steps

## Quality Standards

### Code Examples

- Use modern PHP syntax (8.2+)
- Follow Laravel conventions
- Use type hints
- Include PHPDoc where helpful
- Show both good (✅) and bad (❌) examples

### Documentation

- Use clear, concise language
- Include practical examples
- Add code comments for complex logic
- Use proper markdown formatting
- Check spelling and grammar

### Completeness

Ensure your contribution includes:
- [ ] Clear description and purpose
- [ ] Practical code examples
- [ ] Best practices checklist
- [ ] Integration points (for agents)
- [ ] Verification steps
- [ ] Updated README.md

## Naming Conventions

### Subagents
- Use kebab-case: `laravel-package-developer.md`
- Be specific: `livewire-specialist.md` not `frontend.md`
- Include "laravel" if Laravel-specific

### Skills
- Use kebab-case for directories: `deployment-best-practices/`
- Main file must be `SKILL.md`
- Be descriptive: `api-versioning-strategies/` not `api-tips/`

## Review Process

1. **Automated Checks**: PR must pass any CI checks
2. **Manual Review**: Maintainers will review for:
   - Quality and completeness
   - Alignment with Laravel best practices
   - Usefulness to the community
   - No duplication with existing content
3. **Feedback**: Maintainers may request changes
4. **Approval**: Once approved, PR will be merged

## Getting Help

- **Questions**: Open an issue with the "question" label
- **Discussions**: Use GitHub Discussions for ideas
- **Bugs**: Open an issue with the "bug" label

## Code of Conduct

- Be respectful and constructive
- Welcome newcomers
- Focus on what's best for the Laravel community
- Accept constructive criticism gracefully

## Recognition

Contributors will be:
- Listed in README.md (if desired)
- Credited in release notes
- Mentioned in related documentation

## License

By contributing, you agree that your contributions will be licensed under the MIT License.

---

Thank you for contributing to Laravel Claude Agents! 🚀
