<?php
namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdoptionPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->hasRole('admin') || $user->roles->isEmpty();
    }


    public function update(User $user)
    {
        // Only allow users with the 'Organization' role to update adoptions
        return $user->hasRole('Organization') ||$user->hasRole('admin') ;
    }


}