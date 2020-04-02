<?php

namespace XManh\ModuleCommand\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Modules';

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        \XManh\ModuleCommand\Commands\ControllerMakeCommand::class,
        \XManh\ModuleCommand\Commands\ModelMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
