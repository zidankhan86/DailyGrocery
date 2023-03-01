<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

//How to make Command? php artisan make:command NameCommand

class CMM extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:cmm ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It will create Model ,Migration, Controller at a time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Artisan::call('make:controller');
        Artisan::call('make:migration');
        Artisan::call('make:model');

        printf('Controller Model Migration Created Successfully!');


    }
}
