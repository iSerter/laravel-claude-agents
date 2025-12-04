<?php

namespace ISerter\LaravelClaudeAgents\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishCommand extends Command
{
    protected $signature = 'claude-agents:publish {--force : Overwrite existing files}';

    protected $description = 'Publish Claude AI agents and skills to the project root';

    public function handle(): int
    {
        $source = __DIR__ . '/../../.claude';
        $destination = base_path('.claude');

        if (File::exists($destination) && !$this->option('force')) {
            $this->error('The .claude directory already exists!');
            $this->info('Use --force to overwrite existing files.');
            return self::FAILURE;
        }

        if (File::exists($destination) && $this->option('force')) {
            File::deleteDirectory($destination);
            $this->warn('Existing .claude directory removed.');
        }

        File::copyDirectory($source, $destination);

        $this->info('Claude AI agents and skills published successfully!');
        $this->newLine();
        $this->info('Published:');
        $this->line('  - 10 Laravel-specific agents');
        $this->line('  - 5 Laravel development skills');
        $this->newLine();
        $this->info('The .claude directory has been created in your project root.');

        return self::SUCCESS;
    }
}
