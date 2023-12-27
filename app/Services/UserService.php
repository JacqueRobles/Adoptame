<?php
namespace App\Services;

use App\Models\User;
use App\Models\Organization;
use App\Models\Admin;
use Spatie\Permission\Models\Role;

class UserService
{
    public function createUser(array $attributes, string $userType)
    {
        // Extract the user attributes
        $userAttributes = [
            'email' => $attributes['email'],
            'password' => $attributes['password'],
        ];
        // Remove the user attributes from the original attributes array
        unset($attributes['email'], $attributes['password']);

        // Determine the type of user being created
        $userable = Organization::create($attributes);

        // Create the User
        $user = User::create(array_merge($userAttributes, [
            'userable_id' => $userable->id,
            'userable_type' => get_class($userable),
        ]));

        // Assign the role to the user
        $role = Role::where('name', $userType)->first();
        if ($role) {
            $user->assignRole($userType);
        }

        return $user;
    }
}