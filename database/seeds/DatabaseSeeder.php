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
        if(config('datebase.default') !== 'sqlite'){
          DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        // Model::unguard();
        App\User::truncate();
        $this->call(UsersTableSeeder::class);

        App\Article::truncate();
        $this->call(ArticlesTableSeeder::class);

        // Model::reguard();

        if(config('datebase.default') !== 'sqlite'){
          DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
        // $this->call(UsersTableSeeder::class);
    }
}
