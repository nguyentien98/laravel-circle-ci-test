<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name?}
        {--interface= : The name of repository interface}
        {--class= : The name of repository class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate repository';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!$this->argument('name')) {
            $this->error('Please enter repository name.');

            return;
        }
        
        $interfaceName = $className = $this->argument('name') . 'Repository';

        if ($this->option('interface')) {
            $interfaceName = $this->option('interface');
        }
        if ($this->option('class')) {
            $className = $this->option('class');
        }
        
        $this->callSilent(
            'repository:interface',
            ['name' => $interfaceName]
        );
        $this->callSilent(
            'repository:class',
            [
                'name' => $className,
                'interface' => $interfaceName,
            ]
        );
    }
}
