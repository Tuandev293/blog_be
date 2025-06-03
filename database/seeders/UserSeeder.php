<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'tuanda293@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('superadmin293'),
                'role' => 'super-admin',
                'avatar' => null,
            ]
        );
    }
}
