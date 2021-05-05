<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'yaserkqz',
            'password' => Hash::make('password'),
            'first_name' => 'yaser',
            'last_name' => 'fathollahi',
            'role' => 'super_admin',
            'phone_number' => '09384339099',
            'email' => 'yaserkqz@gmail.com',
        ]);
    }

}
