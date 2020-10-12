<?php

namespace Proycer\TablerPreset;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class TablerPresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tabler', function (UiCommand $command) {
            $tablerPreset = new TablerPreset($command);
            $tablerPreset->install();

            $command->info('Tabler scaffolding installed successfully.');

            if ($command->option('auth')) {
                $tablerPreset->installAuth();
                $command->info('Tabler CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
