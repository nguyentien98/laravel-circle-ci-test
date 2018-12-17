<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class RepositoryInterfaceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repository:interface {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create repository interface';

    /**
     * The type is displayed in terminal
     */
    protected $type = 'Repository interface';
    
    /**
     * Get the stub file of repository interface
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/RepositoryInterface.stub';
    }

    /**
     * The folder and namespace of this interface
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Contracts\Repositories';
    }
}
