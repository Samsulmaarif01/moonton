<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            // 'role_id' => 1,
        ]);
        $admin->assignRole('admin');

        // $user = User::create([
        //     'name' => 'User',
        //     'email' => 'user@example.com',
        //     'password' => 'password',
        //     'role_id' => 2,
        // ]);
    }
}
