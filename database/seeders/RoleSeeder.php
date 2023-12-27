<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
    @return void();
    */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Organization']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);

    }


}