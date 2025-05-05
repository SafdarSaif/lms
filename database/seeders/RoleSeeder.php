<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);

        // Create Roles
        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $userRole = Role::create(['name' => 'User']);

        // Assign Permissions to Roles
        $adminRole->givePermissionTo(['create posts', 'edit posts', 'delete posts', 'publish posts']);
        $editorRole->givePermissionTo(['create posts', 'edit posts']);
        $userRole->givePermissionTo(['create posts']);
    }
}
