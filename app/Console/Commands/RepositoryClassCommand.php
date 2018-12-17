<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class RepositoryClassCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repository:class {name} {interface?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create repository class';

    /**
     * The type is displayed in terminal
     */
    protected $type = 'Repository class';

    /**
     * Get the stub file of repository class
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/RepositoryClass.stub';
    }

    /**
     * The folder and namespace of this class
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Repositories';
    }

    // Replace dummy class to specific class
    // and interface to specific interface
    // that is typed
    protected function replaceNamespace(&$stub, $name)
    {
        $interfaceName = $this->argument('interface') ?? $this->getNameInput();
        $stub = str_replace(
            [
                'DummyRepositoryClass',
                'DummyRepositoryInterface',
            ],
            [
                $this->getNameInput(),
                $interfaceName,
            ],
            $stub
        );

        return $this;
    }
}
