<?php

use Illuminate\Database\Seeder;
use \App\HashTag;           
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(HashTag::class,10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
