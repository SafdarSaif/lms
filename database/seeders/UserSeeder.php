<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin User
        $user = User::updateOrCreate(
            ['email' => 'superadmins@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password') // You can replace this with your password
            ]
        );

        // Ensure the role exists
        $role = Role::firstOrCreate(['name' => 'Super Admin']);

        // Assign the Super Admin role
        $user->assignRole($role);
    }
}
