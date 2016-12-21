<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lavalite:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Lavalite';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Lavalite installation started...');
        $this->line('Migrating and seeding tables...');
        $this->line('Finished...');
        $this->line('Publishing configuration files.');
        $this->line('Finished...');
        $this->choice('Publish views?', ['Y', 'N'], 'N');

        $username = $this->ask("Please enter superuser email? [superuser@superuser.com]", 'superuser@superuser.com');
        $password = $this->secret("Please enter superuser password?");
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function env()
    {
        $host = $this->ask('DB Host[localhost] ?:', 'localhost');
        $db = $this->ask('Database name[lavalite] ?:', 'lavalite');
        $user = $this->ask('DB User[root] ?:', 'localhost');
        $password = $this->secret('DB password ?:');
    }


}
