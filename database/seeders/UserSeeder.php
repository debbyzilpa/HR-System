<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat pengguna dengan role 'admin'
        User::create([
            'username' => 'admin4',
            'email' => 'admin4@example.com',
            'password' => bcrypt(123123123), // Gunakan password yang aman
            'role' => 'admin', // Atur role sebagai admin
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'admin2@example.com',
            'password' => bcrypt(12457810), // Gunakan password yang aman
            'role' => 'admin', // Atur role sebagai admin
        ]);

        // Membuat pengguna dengan role 'manager'
        User::create([
            'username' => 'manager1',
            'email' => 'manager1@example.com',
            'password' => bcrypt('debby24dara10'), // Gunakan password yang aman
            'role' => 'manager', // Atur role sebagai manager
        ]);

        User::create([
            'username' => 'manager2',
            'email' => 'manager2@example.com',
            'password' => bcrypt(22222222), // Gunakan password yang aman
            'role' => 'manager', // Atur role sebagai manager
        ]);

        // Membuat pengguna dengan role 'user'
        User::create([
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password' => bcrypt('password'), // Gunakan password yang aman
            'role' => 'user', // Atur role sebagai user
        ]);

        User::create([
            'username' => 'user2',
            'email' => 'user2@example.com',
            'password' => bcrypt(22072023), // Gunakan password yang aman
            'role' => 'user', // Atur role sebagai user
        ]);
    }
}
