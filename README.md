# Laravel Claude Agents

> Awesome Claude Code Subagents and Skills for Laravel Development

A comprehensive collection of specialized Claude Code subagents and skills designed specifically for Laravel framework development. Install this package via Composer and publish the agents and skills to your project with a single artisan command.

## Features

### 10 Laravel-Specific Agents

**Development:**
- **laravel-architect** - Application architecture and design patterns expert
- **eloquent-specialist** - Database design, models, relationships, and query optimization
- **laravel-api-developer** - RESTful API development with Sanctum/Passport

**Quality & Testing:**
- **laravel-testing-expert** - Pest PHP, PHPUnit, and comprehensive testing strategies
- **laravel-code-reviewer** - Code quality, Laravel best practices, and PR reviews
- **laravel-architecture-reviewer** - Architecture evaluation and design validation

**Debugging & Performance:**
- **laravel-debugger** - Systematic debugging and issue diagnosis
- **laravel-performance-optimizer** - Performance optimization, caching, and scaling

**Security & Documentation:**
- **laravel-security-auditor** - Security best practices and vulnerability detection
- **laravel-documentation-engineer** - API documentation and technical guides

### 5 Laravel Development Skills

**Development Workflows:**
- **laravel-tdd** - Test-driven development for Laravel with Pest PHP
- **brainstorming** - Collaborative feature design and planning for Laravel
- **systematic-debugging** - Systematic debugging process for Laravel applications

**Best Practices:**
- **eloquent-best-practices** - Eloquent ORM patterns and optimization
- **api-resource-patterns** - API resource and collection best practices

## Requirements

- PHP 8.1 or higher
- Laravel 10.0 or 11.0
- Claude Code

## Installation

Install the package via Composer:

```bash
composer require iserter/laravel-claude-agents
```

## Usage

Publish the Claude AI agents and skills to your project root:

```bash
php artisan claude-agents:publish
```

This will create a `.claude` directory in your project root containing all agents and skills.

### Merging with Existing Files

If a `.claude` directory already exists in your project:

- **Without `--force`**: New files from the package will be added, but existing files will be preserved (not overwritten). This allows you to keep your custom modifications.
  
  ```bash
  php artisan claude-agents:publish
  ```

- **With `--force`**: New files will be added and existing files will be updated to match the package versions, while your custom agent/skill files remain untouched.

  ```bash
  php artisan claude-agents:publish --force
  ```

## What Gets Published

After running the publish command, you'll have:

```
your-project/
├── .claude/
│   ├── agents/
│   │   ├── laravel-debugger.md
│   │   ├── laravel-architect.md
│   │   ├── laravel-code-reviewer.md
│   │   ├── eloquent-specialist.md
│   │   ├── laravel-documentation-engineer.md
│   │   ├── laravel-api-developer.md
│   │   ├── laravel-security-auditor.md
│   │   ├── laravel-performance-optimizer.md
│   │   ├── laravel-testing-expert.md
│   │   └── laravel-architecture-reviewer.md
│   └── skills/
│       ├── systematic-debugging/
│       ├── eloquent-best-practices/
│       ├── api-resource-patterns/
│       ├── laravel-tdd/
│       └── brainstorming/
```

## Using with Claude Code

Once published, Claude Code automatically detects and loads the subagents. You can:

**Invoke them explicitly:**
```
> Ask the laravel-architect to design the authentication system
> Have eloquent-specialist optimize the user queries
> Get laravel-security-auditor to review the API endpoints
```

**Let Claude decide automatically:**
```
> Create a RESTful API for blog posts with authentication
(Claude will automatically use laravel-api-developer)

> Optimize the dashboard query performance
(Claude will automatically use eloquent-specialist and laravel-performance-optimizer)
```

## Subagent Details

### Laravel Architect
**When to invoke:** Application design, architecture decisions, design patterns
- Designs scalable application architecture
- Selects appropriate design patterns
- Plans database schema and relationships
- Defines API contracts and boundaries
- Establishes testing strategies

### Eloquent Specialist
**When to invoke:** Database design, models, relationships, query optimization
- Creates efficient Eloquent models
- Defines complex relationships
- Prevents N+1 query problems
- Optimizes database queries
- Designs indexes and migrations

### Laravel API Developer
**When to invoke:** RESTful API creation, API resources, authentication
- Designs RESTful endpoints
- Creates API resources and collections
- Implements Sanctum/Passport authentication
- Configures rate limiting
- Documents API endpoints

### Laravel Testing Expert
**When to invoke:** Test creation, TDD implementation, test strategy
- Writes comprehensive feature tests
- Creates unit tests for business logic
- Implements test-driven development
- Tests APIs and authentication
- Achieves high code coverage

### Laravel Code Reviewer
**When to invoke:** Code reviews, pull requests, quality assurance
- Reviews code quality and Laravel conventions
- Identifies security vulnerabilities
- Checks performance issues
- Validates best practices
- Provides actionable feedback

### Laravel Architecture Reviewer
**When to invoke:** Architecture evaluation, design validation, technical debt
- Evaluates system design decisions
- Assesses scalability architecture
- Reviews design pattern usage
- Identifies architectural technical debt
- Validates Laravel ecosystem integration

### Laravel Debugger
**When to invoke:** Debugging issues, error analysis, root cause identification
- Diagnoses Laravel-specific problems
- Analyzes error logs and stack traces
- Debugs Eloquent queries and relationships
- Identifies performance bottlenecks
- Resolves package conflicts

### Laravel Performance Optimizer
**When to invoke:** Performance issues, optimization, scaling
- Identifies performance bottlenecks
- Optimizes database queries
- Implements caching strategies
- Configures queue systems
- Sets up Laravel Octane

### Laravel Security Auditor
**When to invoke:** Security reviews, vulnerability detection
- Audits code for OWASP Top 10 vulnerabilities
- Reviews authentication and authorization
- Checks input validation and sanitization
- Verifies CSRF and XSS protection
- Ensures secure file uploads

### Laravel Documentation Engineer
**When to invoke:** Documentation creation, API docs, technical guides
- Creates comprehensive project documentation
- Documents API endpoints with examples
- Writes setup and deployment guides
- Documents Laravel configurations
- Maintains changelog and migration guides

## Skills Details

### Laravel TDD
Test-driven development workflow specifically for Laravel applications using Pest PHP.

**Key Features:**
- Red-Green-Refactor cycle for Laravel
- Feature test patterns
- Database testing with factories
- API testing examples
- Authorization and validation testing

### Brainstorming Laravel
Collaborative feature design and planning specifically for Laravel applications.

**Key Features:**
- Laravel-specific design questions
- Multiple approach exploration
- Incremental validation
- Database schema design
- API and service design patterns

### Systematic Debugging Laravel
Systematic debugging process tailored for Laravel applications.

**Key Features:**
- Four-phase debugging process
- Laravel-specific debug techniques
- Eloquent and route debugging
- Queue and event debugging
- Root cause identification

### Eloquent Best Practices
Patterns and practices for efficient Eloquent ORM usage.

**Key Topics:**
- Query optimization techniques
- Relationship management
- N+1 query prevention
- Mass assignment protection
- Model events and observers

### API Resource Patterns
Best practices for Laravel API resource transformation.

**Key Topics:**
- Resource structure and organization
- Conditional attributes
- Nested relationships
- Resource collections with pagination
- HATEOAS links

## Understanding Subagents vs Skills

### Subagents
- **What:** Specialized AI assistants with specific expertise
- **When:** Task-specific work (API development, testing, optimization)
- **How:** Independent context windows, domain-specific prompts
- **Invoke:** Explicitly or automatically by Claude based on task

### Skills
- **What:** Reusable workflows and best practices
- **When:** Common patterns and methodologies (TDD, optimization patterns)
- **How:** Markdown documentation with examples and checklists
- **Invoke:** Reference in prompts or let Claude apply automatically

## Integration

These subagents work together seamlessly:

- **laravel-architect** designs the architecture
- **eloquent-specialist** implements the database layer
- **laravel-api-developer** builds the API endpoints
- **laravel-testing-expert** creates comprehensive tests
- **laravel-security-auditor** reviews for vulnerabilities
- **laravel-performance-optimizer** optimizes performance

Each agent knows when to collaborate with others for best results.

## Best Practices

1. **Start with Architecture:** Use `laravel-architect` for new features to plan before coding
2. **Test First:** Apply `laravel-tdd` skill and use `laravel-testing-expert` for TDD
3. **Secure by Default:** Have `laravel-security-auditor` review security-sensitive code
4. **Optimize Early:** Use `eloquent-specialist` to prevent N+1 queries from the start
5. **Document APIs:** Let `laravel-api-developer` create well-documented API endpoints
6. **Monitor Performance:** Engage `laravel-performance-optimizer` for bottlenecks

## License

MIT License

## Contributing

Contributions are welcome! Feel free to:
- Add new Laravel-specific subagents
- Improve existing agent prompts
- Add new skills and patterns
- Share usage examples
- Report issues

## Support

For issues, questions, or suggestions:
- Open an issue on GitHub
- Contribute improvements via pull requests

---

Built with ❤️ for the Laravel community
