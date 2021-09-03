<?php

namespace App\Policies;

use Litepie\User\Interfaces\UserPolicyInterface;
use App\Repositories\Eloquent\ClientRepository;

class ClientPolicy
{

    /**
     * Determine if the given user can view the client.
     *
     * @param UserPolicyInterface $authUser
     * @param ClientRepository $client
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, ClientRepository $client)
    {
        if ($authUser->canDo('users.client.view')) {
            return true;
        }

        return $client->user_id == user_id() && $client->user_type == user_type();
    }

    /**
     * Determine if the given user can create a client.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('users.client.create');
    }

    /**
     * Determine if the given user can update the given client.
     *
     * @param UserPolicyInterface $authUser
     * @param ClientRepository $client
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, ClientRepository $client)
    {
        if ($authUser->canDo('users.client.edit')) {
            return true;
        }

        return $client->user_id == user_id() && $client->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given client.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, ClientRepository $client)
    {
        return $client->user_id == user_id() && $client->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given client.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function verify(UserPolicyInterface $authUser, ClientRepository $client)
    {
        if ($authUser->canDo('users.client.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given client.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function approve(UserPolicyInterface $authUser, ClientRepository $client)
    {
        if ($authUser->canDo('users.client.approve')) {
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