<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql')->statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            UserSeeder::class,
            UserDataSeeder::class,
        ]);

        DB::connection('mysql')->statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
