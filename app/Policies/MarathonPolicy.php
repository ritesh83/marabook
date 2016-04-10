<?php

namespace App\Policies;

use App\User;
use App\Marathon;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarathonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given marathon.
     *
     * @param  User  $user
     * @param  Marathon  $marathon
     * @return bool
     */
    public function destroy(User $user, Marathon $marathon)
    {
        if ($user->id === $marathon->user_id) {
            return true;
        }

        return false;
    }
}