<?php

namespace App\Policies\User;

use App\Models\Client;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the user.
     *
     * @param User $user
     * @param User $user
     *
     * @return bool
     */
    public function view(User $user, Client $client)
    {
        if ($user->canDo('user.'.request('type', 'client').'.view') && $user->isAdmin()) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can create a user.
     *
     * @param User $user
     * @param User $user
     *
     * @return bool
     */
    public function create(User $user)
    {
        if ($user->canDo('user.'.request('type', 'client').'.view') && $user->isAdmin()) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can update the given user.
     *
     * @param User $user
     * @param User $user
     *
     * @return bool
     */
    public function update(User $user, Client $client)
    {
        if ($user->canDo('user.'.request('type', 'client').'.view') && $user->isAdmin()) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can delete the given user.
     *
     * @param User $user
     * @param User $user
     *
     * @return bool
     */
    public function destroy(User $user, Client $client)
    {
        if ($user->canDo('user.'.request('type', 'client').'.view') && $user->isAdmin()) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
