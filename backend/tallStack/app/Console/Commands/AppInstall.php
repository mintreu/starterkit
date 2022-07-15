<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AppInstall extends Command
{

    private array $bag=[];
    private bool $canRun = true;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mintreu:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info(config('app.name').' Installer');
        $this->warn('Installer: Please wait...');
        sleep(2);
        if ($this->confirm('Installer: Do you wish to continue?', true))
        {
            if (App::version() > 9) {
                $this->bag[] = [config('app.name'), 'Pass [' . App::version() . ']', 'OK'];
            } else {
                $this->canRun = false;
                $this->bag[] = [config('app.name'), 'Fail', 'Minimum '.config('app.name').' : v.9 And Currently have :' . App::version()];
            }
            if (DB::connection()->getDatabaseName()) {
                $this->bag[] = ['Database', 'Active [' . DB::connection()->getDatabaseName() . ']', 'OK'];
            } else {
                $this->canRun = false;
                $this->bag[] = ['Database', 'InActive', 'Check Your DB Credentials'];
            }
            //Display Table
            sleep(2);
            $this->table(
                ['Attribute', 'Status', 'Recommendation'],
                $this->bag
            );
            sleep(2);
            if ($this->canRun)
            {
                if ($this->confirm('Installer: Do You Wish To Install/ReInstall Everything?', true))
                {
                    // waiting for 2 seconds
                    $this->warn('Please wait...');
                    sleep(2);
                    // cached new changes
                    $this->warn('Installer: Caching new changes...');
                    $optimize = $this->call('optimize:clear');
                    $this->info($optimize);
                    $migrate = $this->call('migrate:fresh');
                    $this->info($migrate);
                    sleep(2);
                    $seed = $this->call('db:seed');
                    $this->info($seed);
                }

                $this->warn('Installer: Finalizing Installation...');
                sleep(2);
                $this->info('-----------------------------');
                $this->info('Congratulations!');
                $this->info('The installation has been finished and you can now use '.config('app.name'));
            }
        }
    }


}
