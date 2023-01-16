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
        //
        DB::table('users')->insert([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make('admin123'),
            "gender" => "Male",
            "address" => "Somewhere",
            "role" => "Admin"
        ]);

        DB::table('users')->insert([
            "name" => "customer",
            "email" => "customer@gmail.com",
            "password" => Hash::make('customer123'),
            "gender" => "Male",
            "address" => "Somewhere",
            "role" => "Member"
        ]);
    }
}
