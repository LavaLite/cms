<?php

namespace App\Policies;

use Litepie\User\Interfaces\UserPolicyInterface;
use App\Repositories\Eloquent\PermissionRepository;

class PermissionPolicy
{

    /**
     * Determine if the given user can view the permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, PermissionRepository $permission)
    {
        if ($authUser->canDo('role.permission.view')) {
            return true;
        }

        return $permission->user_id == user_id() && $permission->user_type == user_type();
    }

    /**
     * Determine if the given user can create a permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('role.permission.create');
    }

    /**
     * Determine if the given user can update the given permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, PermissionRepository $permission)
    {
        if ($authUser->canDo('role.permission.edit')) {
            return true;
        }

        return $permission->user_id == user_id() && $permission->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, PermissionRepository $permission)
    {
        return $permission->user_id == user_id() && $permission->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function verify(UserPolicyInterface $authUser, PermissionRepository $permission)
    {
        if ($authUser->canDo('role.permission.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given permission.
     *
     * @param UserPolicyInterface $authUser
     * @param PermissionRepository $permission
     *
     * @return bool
     */
    public function approve(UserPolicyInterface $authUser, PermissionRepository $permission)
    {
        if ($authUser->canDo('role.permission.approve')) {
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
