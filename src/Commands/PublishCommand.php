<?php

namespace ISerter\LaravelClaudeAgents\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishCommand extends Command
{
    protected $signature = 'claude-agents:publish {--force : Overwrite existing files}';

    protected $description = 'Publish Claude AI agents and skills to the project root (merges with existing .claude directory)';

    public function handle(): int
    {
        $source = __DIR__ . '/../../.claude';
        $destination = base_path('.claude');

        if (File::exists($destination)) {
            $this->warn('The .claude directory already exists. Merging files...');
            $this->mergeDirectories($source, $destination);
        } else {
            File::copyDirectory($source, $destination);
            $this->info('The .claude directory has been created in your project root.');
        }

        $this->info('Claude AI agents and skills published successfully!');
        $this->newLine();
        $this->info('Published:');
        $this->line('  - 10 Laravel-specific agents');
        $this->line('  - 5 Laravel development skills');

        return self::SUCCESS;
    }

    /**
     * Merge source directory into destination directory.
     * Recursively copies files, overwriting existing ones if --force is used.
     *
     * @param string $source
     * @param string $destination
     * @return void
     */
    protected function mergeDirectories(string $source, string $destination): void
    {
        $force = $this->option('force');

        if (!File::isDirectory($source)) {
            return;
        }

        if (!File::isDirectory($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        $items = File::allFiles($source);

        foreach ($items as $item) {
            $relativePath = $item->getRelativePathname();
            $destinationPath = $destination . DIRECTORY_SEPARATOR . $relativePath;
            $destinationDir = dirname($destinationPath);

            // Create subdirectories if they don't exist
            if (!File::isDirectory($destinationDir)) {
                File::makeDirectory($destinationDir, 0755, true);
            }

            // Copy file if it doesn't exist, or if --force is used
            if (!File::exists($destinationPath)) {
                File::copy($item->getPathname(), $destinationPath);
                $this->line("  <info>✓</info> Created: {$relativePath}");
            } elseif ($force) {
                File::copy($item->getPathname(), $destinationPath);
                $this->line("  <comment>↻</comment> Updated: {$relativePath}");
            } else {
                $this->line("  <fg=gray>-</> Skipped: {$relativePath} (already exists)</>");
            }
        }

        if (!$force) {
            $this->newLine();
            $this->info('Use --force to overwrite existing files.');
        }
    }
}
