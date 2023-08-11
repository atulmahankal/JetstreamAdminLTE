<?php

namespace AtulMahankal\JetstreamAdminLte\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jetstreamadminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Jetstream with AdminLTE views';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('jetstream:install', ['stack' => 'livewire']);


        // Publish your AdminLTE Theme
        $this->call('vendor:publish', [
            '--tag' => 'amadminlte-theme',
            '--force' => false,
        ]);

        // Publish your custom views
        $this->call('vendor:publish', [
            '--tag' => 'jetstreamadminlte-views',
            '--force' => false,
        ]);

        // Publish your custom views
        $this->call('vendor:publish', [
            '--tag' => 'jetstreamadminlte-controller',
            '--force' => false,
        ]);
        
        // (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/views', resource_path('views'));
        // (new Filesystem)->copyDirectory(base_path('vendor/almasaeed2010/adminlte/dist'), public_path('vendor/adminlte'));
        // (new Filesystem)->copyDirectory(base_path('vendor/almasaeed2010/adminlte/plugins'), public_path('vendor'));

        $this->info('Install Jetstream with AdminLTE views installed.');
    }
}
