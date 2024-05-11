<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        Role::create(['guard_name' => 'admin', 'name' => 'member']);

        Permission::create(['guard_name' => 'admin', 'name' => 'create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'read']);
        Permission::create(['guard_name' => 'admin', 'name' => 'update']);
        Permission::create(['guard_name' => 'admin', 'name' => 'delete']);

        $adminRole = Role::findByName('admin', 'admin');
        $memberRole = Role::findByName('member', 'admin');

        $adminCreateRole = Permission::findByName('create', 'admin');
        $adminReadRole = Permission::findByName('read', 'admin');
        $adminUpdateRole = Permission::findByName('update', 'admin');
        $adminDeleteRole = Permission::findByName('delete', 'admin');

        $adminRole->givePermissionTo([$adminCreateRole, $adminReadRole, $adminUpdateRole, $adminDeleteRole]);
        $memberRole->givePermissionTo([$adminCreateRole, $adminReadRole]);
    }
}
