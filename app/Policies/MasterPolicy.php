<?php

namespace App\Policies;

use Litepie\User\Interfaces\UserPolicyInterface;
use App\Repositories\Eloquent\MasterRepository;

class MasterPolicy
{

    /**
     * Determine if the given user can view the master.
     *
     * @param UserPolicyInterface $authUser
     * @param MasterRepository $master
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, MasterRepository $master)
    {
        if ($authUser->canDo('master.master.view')) {
            return true;
        }

        return $master->user_id == user_id() && $master->user_type == user_type();
    }

    /**
     * Determine if the given user can create a master.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('master.master.create');
    }

    /**
     * Determine if the given user can update the given master.
     *
     * @param UserPolicyInterface $authUser
     * @param MasterRepository $master
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, MasterRepository $master)
    {
        if ($authUser->canDo('master.master.edit')) {
            return true;
        }

        return $master->user_id == user_id() && $master->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given master.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, MasterRepository $master)
    {
        return $master->user_id == user_id() && $master->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given master.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function verify(UserPolicyInterface $authUser, MasterRepository $master)
    {
        if ($authUser->canDo('master.master.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given master.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function approve(UserPolicyInterface $authUser, MasterRepository $master)
    {
        if ($authUser->canDo('master.master.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $authUser    [description]
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
