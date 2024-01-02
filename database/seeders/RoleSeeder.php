<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
    @return void();
    */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'organization']);

        Permission::create(['name' => 'admin.home'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.destroy'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.store'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name' => 'pets.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'pets.update'])->syncRoles([$role1, $role2]); 

    }


}