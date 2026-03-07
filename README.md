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

### 15 Laravel Development Skills

**Development Workflows:**
- **laravel-tdd** - Test-driven development for Laravel with Pest PHP
- **laravel-brainstorming** - Collaborative feature design and planning for Laravel
- **laravel-systematic-debugging** - Systematic debugging process for Laravel applications

**Best Practices:**
- **eloquent-best-practices** - Eloquent ORM patterns and optimization
- **laravel-api-resource-patterns** - API resource and collection best practices
- **laravel-validation-patterns** - Form Requests, custom rules, and conditional validation
- **laravel-authorization-patterns** - Gates, Policies, and middleware access control
- **laravel-queue-patterns** - Job structure, batching, chaining, and retry strategies
- **laravel-event-driven-architecture** - Events, listeners, subscribers, and model observers
- **laravel-caching-strategies** - Cache patterns, tags, locks, and invalidation
- **laravel-notification-patterns** - Multi-channel notifications and queueing
- **laravel-middleware-patterns** - Custom middleware, groups, and parameters
- **laravel-blade-component-patterns** - Components, slots, attributes, and reusable UI
- **laravel-task-scheduling** - Scheduled commands, constraints, and monitoring
- **laravel-feature-flags** - Pennant feature flags, A/B testing, and gradual rollouts

## Requirements

- Claude Code
- For Composer install: PHP 8.1+, Laravel 10/11/12

## Installation

### Option 1: Claude Plugin (Recommended)

Install directly as a Claude Code plugin:

```bash
# Add the marketplace
/plugin marketplace add iserter/laravel-claude-agents

# Install the plugin
/plugin install laravel-claude-agents
```

Or install directly from GitHub:

```bash
/plugin install --source github iserter/laravel-claude-agents
```

### Option 2: Composer Package

Install as a Laravel dev dependency and publish to your project:

```bash
composer require --dev iserter/laravel-claude-agents:dev-main
php artisan claude-agents:publish
```

This creates a `.claude` directory in your project root with all agents and skills.

> **Note:** With `--force`, existing files are updated to match package versions. Without it, existing files are preserved.

## What Gets Installed

**Via plugin:** Claude Code loads agents and skills directly from the plugin — no files added to your project.

**Via Composer publish:** Creates a `.claude` directory in your project:

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
│       ├── laravel-systematic-debugging/
│       ├── eloquent-best-practices/
│       ├── laravel-api-resource-patterns/
│       ├── laravel-tdd/
│       ├── laravel-brainstorming/
│       ├── laravel-validation-patterns/
│       ├── laravel-authorization-patterns/
│       ├── laravel-queue-patterns/
│       ├── laravel-event-driven-architecture/
│       ├── laravel-caching-strategies/
│       ├── laravel-notification-patterns/
│       ├── laravel-middleware-patterns/
│       ├── laravel-blade-component-patterns/
│       ├── laravel-task-scheduling/
│       └── laravel-feature-flags/
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

| Agent | When to Invoke | Key Capabilities |
|-------|---------------|------------------|
| **laravel-architect** | Architecture decisions, design patterns | Scalable architecture, design patterns, schema planning, API contracts |
| **eloquent-specialist** | Database design, models, query optimization | Eloquent models, relationships, N+1 prevention, indexes, migrations |
| **laravel-api-developer** | RESTful API creation, authentication | API resources, Sanctum/Passport, rate limiting, endpoint documentation |
| **laravel-testing-expert** | Test creation, TDD, test strategy | Feature/unit tests, Pest PHP, API testing, code coverage |
| **laravel-code-reviewer** | Code reviews, pull requests, QA | Code quality, security checks, performance issues, best practices |
| **laravel-architecture-reviewer** | Architecture evaluation, technical debt | Design validation, scalability assessment, pattern review |
| **laravel-debugger** | Debugging, error analysis, root cause | Laravel diagnostics, log analysis, query debugging, package conflicts |
| **laravel-performance-optimizer** | Performance issues, optimization, scaling | Bottleneck identification, caching, queues, Octane setup |
| **laravel-security-auditor** | Security reviews, vulnerability detection | OWASP Top 10, auth review, input validation, CSRF/XSS protection |
| **laravel-documentation-engineer** | Documentation, API docs, technical guides | Project docs, API examples, setup/deployment guides, changelogs |

## Skills Details

| Skill | Description |
|-------|-------------|
| **laravel-tdd** | Red-Green-Refactor cycle with Pest PHP, feature/unit tests, database testing with factories |
| **laravel-brainstorming** | Collaborative feature design, multiple approach exploration, schema and API design |
| **laravel-systematic-debugging** | Four-phase debugging process, Eloquent/route/queue/event debugging, root cause identification |
| **eloquent-best-practices** | Query optimization, N+1 prevention, relationships, mass assignment, model events |
| **laravel-api-resource-patterns** | Resource transformation, conditional attributes, collections with pagination, HATEOAS links |
| **laravel-validation-patterns** | Form Requests, custom Rule objects, conditional/array/database validation, input sanitization |
| **laravel-authorization-patterns** | Gates, Policies, middleware auth, Blade directives, Response objects, testing access control |
| **laravel-queue-patterns** | Job structure, batching, chaining, middleware (RateLimited, WithoutOverlapping), retry strategies |
| **laravel-event-driven-architecture** | Events/listeners, auto-discovery, queued listeners, subscribers, model observers, transaction safety |
| **laravel-caching-strategies** | remember/flexible patterns, cache tags, atomic locks, memoization, invalidation strategies |
| **laravel-notification-patterns** | Mail/database/broadcast/Slack channels, markdown templates, queueing, on-demand recipients |
| **laravel-middleware-patterns** | Before/after/terminable patterns, groups, parameters, aliases, common implementations |
| **laravel-blade-component-patterns** | Class-based/anonymous components, slots, $attributes bag, stacks, view fragments |
| **laravel-task-scheduling** | Schedule definitions, frequency constraints, overlap prevention, onOneServer, monitoring hooks |
| **laravel-feature-flags** | Pennant feature flags, scoping, rich values for A/B testing, Blade directives, gradual rollouts |

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
