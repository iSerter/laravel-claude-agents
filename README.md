# Laravel Claude Agents

> Awesome Claude Code Subagents and Skills for Laravel Development

A comprehensive collection of specialized Claude Code subagents and skills for Laravel development. 10 agents and 15 skills covering architecture, Eloquent, APIs, testing, security, performance, debugging, and more.

## Installation

### Claude Plugin (Recommended)

```bash
/plugin install --source github iserter/laravel-claude-agents
```

Or via the marketplace:

```bash
/plugin marketplace add iserter/laravel-claude-agents
/plugin install laravel-claude-agents
```

No files are added to your project — Claude Code loads agents and skills directly from the plugin.

### Alternative: Composer Package

For teams that prefer vendored files committed to the repo:

```bash
composer require --dev iserter/laravel-claude-agents:dev-main
php artisan claude-agents:publish
```

This copies agents and skills into `.claude/` in your project root. Use `--force` to overwrite existing files.

> Requires PHP 8.1+ and Laravel 10/11/12.

## Usage

Once installed, Claude Code automatically detects the agents and skills. You can invoke them explicitly or let Claude choose automatically:

```
> Ask the laravel-architect to design the authentication system
> Have eloquent-specialist optimize the user queries
> Create a RESTful API for blog posts with authentication
> Optimize the dashboard query performance
```

## Agents

| Agent | Description |
|-------|-------------|
| **laravel-architect** | Architecture decisions, design patterns, schema planning |
| **eloquent-specialist** | Eloquent models, relationships, N+1 prevention, migrations |
| **laravel-api-developer** | API resources, Sanctum/Passport, rate limiting |
| **laravel-testing-expert** | Pest PHP, feature/unit tests, TDD, code coverage |
| **laravel-code-reviewer** | Code quality, security checks, best practices |
| **laravel-architecture-reviewer** | Design validation, scalability, technical debt |
| **laravel-debugger** | Error diagnosis, log analysis, query debugging |
| **laravel-performance-optimizer** | Caching, queues, bottleneck identification, Octane |
| **laravel-security-auditor** | OWASP Top 10, auth review, CSRF/XSS protection |
| **laravel-documentation-engineer** | API docs, setup guides, changelogs |

## Skills

| Skill | Description |
|-------|-------------|
| **laravel-tdd** | Red-Green-Refactor with Pest PHP, database testing with factories |
| **laravel-brainstorming** | Feature design, approach exploration, schema and API planning |
| **laravel-systematic-debugging** | Four-phase debugging, root cause identification |
| **eloquent-best-practices** | Query optimization, N+1 prevention, mass assignment, model events |
| **laravel-api-resource-patterns** | Resource transformation, conditional attributes, pagination |
| **laravel-validation-patterns** | Form Requests, custom rules, conditional/array validation |
| **laravel-authorization-patterns** | Gates, Policies, middleware auth, Blade directives |
| **laravel-queue-patterns** | Job batching, chaining, middleware, retry strategies |
| **laravel-event-driven-architecture** | Events/listeners, subscribers, model observers, transaction safety |
| **laravel-caching-strategies** | Cache tags, atomic locks, memoization, invalidation |
| **laravel-notification-patterns** | Mail/database/broadcast/Slack, queueing, on-demand recipients |
| **laravel-middleware-patterns** | Before/after/terminable patterns, groups, parameters |
| **laravel-blade-component-patterns** | Components, slots, $attributes bag, stacks, view fragments |
| **laravel-task-scheduling** | Frequency constraints, overlap prevention, onOneServer, hooks |
| **laravel-feature-flags** | Pennant feature flags, A/B testing, scoping, gradual rollouts |

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
