<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create ([
        //     'username' => 'cindy',
        //     'email' => 'cindy01@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'nama_lengkap' => 'Cindy Zahara',
        //     'role' => 'administrator',
        //     'verifikasi' => 'sudah',
        //     'alamat' => 'Subang'
        // ]);

        User::create ([
            'username' => 'petugas1',
            'email' => 'petugas1@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'petugas satu',
            'role' => 'petugas',
            'verifikasi' => 'sudah',
            'alamat' => 'jakarta'
        ]);
    }
}
