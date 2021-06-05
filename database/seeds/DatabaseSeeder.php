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
        // $this->call(UserSeeder::class);

        //Se crearan 4 usuarios
        factory(App\User::class, 4)->create();

        //Se crearan 40 post
        factory(App\Post::class, 40)->create();
    }
}
