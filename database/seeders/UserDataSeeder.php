<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserData::truncate();
        UserData::insert([
            array(
                'position' => "Test Admin",
                'status' => "active",
                'user_id' => 1,
            ),
            array(
                'position' => "Test Admin",
                'status' => "active",
                'user_id' => 2,
            ),
        ]);
    }
}
