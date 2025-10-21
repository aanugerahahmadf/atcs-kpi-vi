<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@pertamina.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('@Admin123'),
                'is_admin' => true,
            ]
        );
    }
}
