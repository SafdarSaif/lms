<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    private $superAdminPermissions = [
        'view permissions',
        'create permissions',
        'edit permissions',
        'delete permissions',
        'view roles',
        'create roles',
        'edit roles',
        'delete roles',
        'view users',
        'create users',
        'edit users',
        'delete users',
        'view academic',
        'edit academic',
        'create academic',
        'delete academic',
    ];

    public function run(): void
    {
        // Create permissions
        foreach ($this->superAdminPermissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Create roles
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'Center', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'Sub-Center', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'Operation-Head', 'guard_name' => 'web']);

        // Assign all permissions to Super Admin
        $permissions = Permission::all();
        $superAdmin->syncPermissions($permissions);
    }
}