<?php

namespace App\Policies;
;

use Litepie\User\Interfaces\UserPolicyInterface;
use App\Repositories\Eloquent\UserRepository;

class UserPolicy
{

    /**
     * Determine if the given user can view the user.
     *
     * @param UserPolicyInterface $authUser
     * @param UserRepository $user
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, UserRepository $user)
    {
        if ($authUser->canDo('users.user.view')) {
            return true;
        }

        return $user->user_id == user_id() && $user->user_type == user_type();
    }

    /**
     * Determine if the given user can create a user.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('users.user.create');
    }

    /**
     * Determine if the given user can update the given user.
     *
     * @param UserPolicyInterface $authUser
     * @param UserRepository $user
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, UserRepository $user)
    {
        if ($authUser->canDo('users.user.edit')) {
            return true;
        }

        return $user->user_id == user_id() && $user->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given user.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, UserRepository $user)
    {
        return $user->user_id == user_id() && $user->user_type == user_type();
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $authUserRepository    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($authUser, $ability)
    {
        if ($authUser->isSuperuser()) {
            return true;
        }
    }
}