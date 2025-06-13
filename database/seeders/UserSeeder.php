<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'super-admin@gmail.com',
            'username' => 'superadmin',
            'phone' => '0123456789',
            'role' => 'super-admin',
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(30)
        ]);
    }
}
