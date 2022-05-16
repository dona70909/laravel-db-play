<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Movie::class,50)->create();
        /* 

            php artisan make:seeder UserSeeder 
            php artisan db:seed call the seeders
            php artisan db:seed --class=UserSeeder call the specifi seeder
            
        */
    }
}
