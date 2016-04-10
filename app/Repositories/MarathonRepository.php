<?php

namespace App\Repositories;

use App\User;
use App\Marathon;

class MarathonRepository
{
    /**
     * Get all of the marathons for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Marathon::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

    public function byId($id)
    {
        return Marathon::where('id', $id)
            ->first();
    }
}