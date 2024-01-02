<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class AdminSeeder extends Seeder
{
    /**
    @return void();
    */
    public function run()
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'SuperAdmin',
            'email' => 'josesand99v@gmail.com',
            'password' => '12345678',
        ]);
        $user->assignRole('admin');
    }
}