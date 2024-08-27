<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('adminpassword'),
                'nama_depan' => 'Admin User',
                'nama_belakang' => 'Admin User',
                'nomor' => '1234',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'foto' => 'path/to/admin-photo.jpg', // sesuaikan path jika diperlukan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'saifur45',
                'password' => Hash::make('saifur45'),
                'nama_depan' => 'Admin User',
                'nama_belakang' => 'Admin User',
                'nomor' => '1234',
                'email' => 'saifur@example.com',
                'role' => 'admin',
                'foto' => 'path/to/admin-photo.jpg', // sesuaikan path jika diperlukan
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
