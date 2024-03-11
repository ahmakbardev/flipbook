<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // You can change the values below to your desired admin credentials.
        $admin = [
            'name' => 'admin_flipbook',
            'email' => 'admin@mail.com',
            'password' => Hash::make('adminlogin123'),
        ];

        // Insert the admin record into the 'admins' table.
        DB::table('users')->insert($admin);
    }
}

