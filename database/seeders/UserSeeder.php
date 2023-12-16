<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Rais',
                'email' => 'rais@gmail.com',
                'password' => '12345',
                'role' => 'admin',
            ],
            [
                'name' => 'rafa',
                'email' => 'rafa@gmail.com',
                'password' => '1234567',
                'role' => 'alumni',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
