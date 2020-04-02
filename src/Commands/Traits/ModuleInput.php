<?php

namespace XManh\ModuleCommand\Commands\Traits;

use Symfony\Component\Console\Input\InputArgument;

trait ModuleInput
{
    /**
     * Get the desired module name from the input.
     *
     * @return string
     */
    protected function getModuleInput()
    {
        return trim($this->argument('module'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['module', InputArgument::REQUIRED, 'The module of the class'],
            ['name', InputArgument::REQUIRED, 'The name of the class'],
        ];
    }
}
