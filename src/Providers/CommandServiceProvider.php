<?php

namespace Grilar\DevTool\Providers;

use Grilar\Base\Supports\ServiceProvider;
use Grilar\DevTool\Commands\LocaleCreateCommand;
use Grilar\DevTool\Commands\LocaleRemoveCommand;
use Grilar\DevTool\Commands\Make\ControllerMakeCommand;
use Grilar\DevTool\Commands\Make\FormMakeCommand;
use Grilar\DevTool\Commands\Make\ModelMakeCommand;
use Grilar\DevTool\Commands\Make\RepositoryMakeCommand;
use Grilar\DevTool\Commands\Make\RequestMakeCommand;
use Grilar\DevTool\Commands\Make\RouteMakeCommand;
use Grilar\DevTool\Commands\Make\TableMakeCommand;
use Grilar\DevTool\Commands\PackageCreateCommand;
use Grilar\DevTool\Commands\PackageMakeCrudCommand;
use Grilar\DevTool\Commands\PackageRemoveCommand;
use Grilar\DevTool\Commands\RebuildPermissionsCommand;
use Grilar\DevTool\Commands\TestSendMailCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TableMakeCommand::class,
                ControllerMakeCommand::class,
                RouteMakeCommand::class,
                RequestMakeCommand::class,
                FormMakeCommand::class,
                ModelMakeCommand::class,
                RepositoryMakeCommand::class,
                PackageCreateCommand::class,
                PackageMakeCrudCommand::class,
                PackageRemoveCommand::class,
                TestSendMailCommand::class,
                RebuildPermissionsCommand::class,
                LocaleRemoveCommand::class,
                LocaleCreateCommand::class,
            ]);
        }
    }
}
