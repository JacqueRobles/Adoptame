<?php
namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PetPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        // Only allow users with the 'Organization' role to create pets
        return $user->hasRole('organization');
    }

    public function update(User $user)
    {
        // Only allow users with the 'Organization' role to update pets
        return $user->hasRole('organization');
    }
}