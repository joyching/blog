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
        if (\App\Post::count() === 0) {
            $this->call(PostsTableSeeder::class);
        }
    }
}
