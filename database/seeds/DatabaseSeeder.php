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
        factory('App\Role')->create(['name' => 'user', 'description' => 'Normal User']);
        factory('App\Book', 10)->create();
        factory('App\User', 10)->create();
    }
}
