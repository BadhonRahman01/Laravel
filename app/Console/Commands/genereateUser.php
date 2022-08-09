<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
Use App\Models\User;


class genereateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerenating User on Users table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user=$this->argument('count');
        for ($i=0; $i<user; $i++){
            User::factory()->create();
        }
        //return 0;
    }

}
