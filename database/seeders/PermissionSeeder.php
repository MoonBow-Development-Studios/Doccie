<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //roles
        $admin = Role::create(['name' => 'administrator']);
        $user = Role::create(['name' => 'user']);

        //admin permissions
        $admin_permissions = [];
        $admin_permissions[] = Permission::create(['name' => 'admin_access']); //access to admin panel
        $admin_permissions[] = Permission::create(['name' => 'admin_create_users']); //create users

        $admin->syncPermissions($admin_permissions);

        //user permissions
        $user_permissions = [];
        $user_permissions[] = Permission::create(['name' => 'document_create']); //access to user panel
        $user_permissions[] = Permission::create(['name' => 'document_edit']); //create users
        $user_permissions[] = Permission::create(['name' => 'document_delete']); //create users

        $user->syncPermissions($user_permissions);

    }
}
