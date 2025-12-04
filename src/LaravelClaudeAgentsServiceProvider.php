<?php

namespace ISerter\LaravelClaudeAgents;

use Illuminate\Support\ServiceProvider;
use ISerter\LaravelClaudeAgents\Commands\PublishCommand;

class LaravelClaudeAgentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);

            $this->publishes([
                __DIR__ . '/../.claude' => base_path('.claude'),
            ], 'claude-agents');
        }
    }

    public function register(): void
    {
        //
    }
}
