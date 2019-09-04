<?php

use Illuminate\Database\Seeder;
use App\Hashtag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Hashtag::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
