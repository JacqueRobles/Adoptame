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
        // Determine the type of user being created
        switch ($userType) {
            case 'organization':
                $userable = Organization::create($attributes);
                break;
            case 'admin':
                $userable = Admin::create($attributes);
                break;
            default:
                // Handle invalid user type
                
                break;
        }

        // Create the User
        $user = User::create([
            'userable_id' => $userable->id,
            'userable_type' => get_class($userable),
            // Add other user attributes here
        ]);

        // Assign the role to the user
        $role = Role::where('name', $userType)->first();
        if ($role) {
            $user->assignRole($userType);
        }

        return $user;
    }

}