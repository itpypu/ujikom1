<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Staff TIK 1',
                'email' => 'staff@example.com',
                'role' => 'staff',
            ],
            [
                'name' => 'Staff TIK 2',
                'email' => 'helpdesk@example.com',
                'role' => 'staff',
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'role' => 'user',
            ],
            [
                'name' => 'Siti Aisyah',
                'email' => 'siti@example.com',
                'role' => 'user',
            ],
            [
                'name' => 'Andre Wijaya',
                'email' => 'andre@example.com',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => Hash::make('password'),
                    'role' => $user['role'],
                ]
            );
        }
    }
}
