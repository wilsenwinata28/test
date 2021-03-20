<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            array(
                'name' => "test",
                'email' => "test@gmail.com",
                'password' => password_hash("test123", PASSWORD_BCRYPT),
            ),
            array(
                'name' => "test2",
                'email' => "test2@gmail.com",
                'password' => password_hash("test123", PASSWORD_BCRYPT),
            ),
        ]);
    }
}
