<?php

namespace App\Policies\User;

use App\Models\User;
use App\Models\User as UserModal;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
    public function view(User $user, UserModal $usermodal)
    {
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
    public function update(User $user, UserModal $usermodal)
    {
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
    public function destroy(User $user, UserModal $usermodal)
    {
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
