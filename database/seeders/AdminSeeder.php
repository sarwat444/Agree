<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password"=>Hash::make('12345678'),
            ]
        ]);
        DB::table('admins')->insert([
            [
                "user_id" => 1,
                "role_id" => 1,
            ]
        ]);
    }
}
