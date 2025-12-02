# Example Use Cases

This document provides practical examples of how to use Laravel Claude Agents and Skills in real-world scenarios.

## Use Case 1: Building a Blog API

### Scenario
You need to create a RESTful API for a blog application with posts, comments, and user authentication.

### Agent Workflow

**1. Architecture Planning**
```
> Ask laravel-architect to design the blog API architecture
```

The laravel-architect will:
- Design the database schema (users, posts, comments)
- Plan API endpoint structure
- Recommend authentication approach (Sanctum)
- Define relationships between models
- Suggest caching strategy

**2. Database Implementation**
```
> Have eloquent-specialist create the models and relationships
```

The eloquent-specialist will:
- Create migrations for all tables
- Build Eloquent models with proper relationships
- Define query scopes for common filters
- Add indexes for performance
- Create model factories for testing

**3. API Development**
```
> Use laravel-api-developer to build the REST endpoints
```

The laravel-api-developer will:
- Create API resource classes
- Build controllers with CRUD operations
- Implement Sanctum authentication
- Add rate limiting
- Create API documentation

**4. Testing**
```
> Have laravel-testing-expert create comprehensive tests
```

The laravel-testing-expert will:
- Write feature tests for all endpoints
- Create unit tests for models
- Test authentication flows
- Verify authorization rules
- Ensure >80% code coverage

**5. Security Review**
```
> Get laravel-security-auditor to review the implementation
```

The laravel-security-auditor will:
- Check for SQL injection vulnerabilities
- Verify input validation
- Review authentication implementation
- Ensure proper authorization
- Check for XSS vulnerabilities

**6. Performance Optimization**
```
> Ask laravel-performance-optimizer to optimize queries
```

The laravel-performance-optimizer will:
- Identify and fix N+1 queries
- Add appropriate caching
- Optimize database indexes
- Configure queue jobs
- Suggest performance improvements

## Use Case 2: Optimizing an Existing Application

### Scenario
Your Laravel application is experiencing performance issues with slow page loads.

### Agent Workflow

**1. Performance Analysis**
```
> Have laravel-performance-optimizer identify bottlenecks
```

The optimizer will:
- Analyze slow queries
- Check for N+1 query problems
- Review caching implementation
- Examine queue usage
- Profile critical paths

**2. Query Optimization**
```
> Get eloquent-specialist to optimize database queries
```

The specialist will:
- Add eager loading where needed
- Optimize database indexes
- Refactor complex queries
- Implement query scopes
- Use chunking for large datasets

**3. Verification**
```
> Have laravel-testing-expert verify optimizations don't break functionality
```

The testing expert will:
- Run existing test suite
- Add performance tests
- Verify query counts
- Test edge cases
- Ensure no regressions

## Use Case 3: Security Audit

### Scenario
You need to prepare for a security audit of your Laravel application.

### Agent Workflow

**1. Comprehensive Security Review**
```
> Ask laravel-security-auditor to perform a complete security audit
```

The auditor will:
- Check OWASP Top 10 vulnerabilities
- Review authentication implementation
- Verify authorization (policies/gates)
- Check input validation
- Review file upload security
- Verify CSRF protection
- Check for XSS vulnerabilities
- Review API security

**2. Fix Identified Issues**
```
> Have respective agents fix security issues
```

- laravel-api-developer: Fix API security issues
- eloquent-specialist: Fix SQL injection risks
- laravel-architect: Design secure architecture changes

**3. Testing Security Fixes**
```
> Get laravel-testing-expert to create security tests
```

The testing expert will:
- Write tests for authentication
- Test authorization rules
- Verify input validation
- Test rate limiting
- Create penetration test cases

## Use Case 4: Test-Driven Development

### Scenario
You want to implement a new feature using TDD methodology.

### Using the Laravel TDD Skill

**1. Follow the TDD Cycle**
```
> Apply the laravel-tdd skill for implementing post publishing feature
```

**RED Phase:**
```php
test('can publish draft post', function () {
    $post = Post::factory()->draft()->create();
    
    $this->actingAs($post->user)
        ->post("/posts/{$post->id}/publish")
        ->assertRedirect();
    
    expect($post->fresh()->status)->toBe('published');
});
```

**Verify RED:**
```bash
php artisan test --filter=can_publish_draft_post
# Test fails - route doesn't exist
```

**GREEN Phase:**
Create minimal code to pass:
- Add route
- Create controller method
- Update post status

**Verify GREEN:**
```bash
php artisan test
# All tests pass
```

**REFACTOR:**
- Extract publishing logic to service
- Add event for post published
- Update related tests

## Use Case 5: Building API Resources

### Scenario
You need to transform Eloquent models to API responses with proper formatting.

### Using API Resource Patterns Skill

**1. Apply the Skill**
```
> Use api-resource-patterns skill to create post API resources
```

**2. Create Resource**
```php
class PostResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'created_at' => $this->created_at->toISOString(),
            
            // Conditional attributes
            'author' => new UserResource($this->whenLoaded('user')),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
        ];
    }
}
```

**3. Create Collection**
```php
class PostCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'total' => $this->total(),
                'per_page' => $this->perPage(),
            ],
        ];
    }
}
```

## Tips for Effective Use

### Combining Multiple Agents

For complex tasks, invoke multiple agents:
```
> Have laravel-architect design the feature, eloquent-specialist create the models, 
  laravel-api-developer build the API, and laravel-testing-expert create tests
```

### Using Skills as Reference

Reference skills in your prompts:
```
> Following the laravel-tdd skill, implement user registration with tests
```

### Explicit vs Automatic Invocation

**Explicit:**
```
> Ask laravel-security-auditor to review authentication
```

**Automatic:**
```
> Review authentication security
(Claude automatically uses laravel-security-auditor)
```

### Sequential Workflow

For best results, follow this sequence:
1. **laravel-architect** - Design
2. **eloquent-specialist** or **laravel-api-developer** - Implement
3. **laravel-testing-expert** - Test
4. **laravel-security-auditor** - Security review
5. **laravel-performance-optimizer** - Optimize

## Common Patterns

### New Feature Development
1. Design with laravel-architect
2. Implement with TDD using laravel-testing-expert
3. Review security with laravel-security-auditor
4. Optimize with laravel-performance-optimizer

### Bug Fixing
1. Write failing test with laravel-testing-expert
2. Fix with appropriate specialist
3. Verify with tests
4. Check security implications

### Refactoring
1. Ensure test coverage with laravel-testing-expert
2. Refactor with eloquent-specialist or laravel-api-developer
3. Run tests to verify
4. Optimize with laravel-performance-optimizer

### Code Review
1. Security review with laravel-security-auditor
2. Performance review with laravel-performance-optimizer
3. Best practices check with relevant specialists
