<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\UserItemPresenter;
use Litepie\User\Interfaces\UserRepositoryInterface;
use Litepie\User\Repositories\Eloquent\UserRepository as LitepieRepository;

class UserRepository extends LitepieRepository implements UserRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return UserItemPresenter::class;
    }
}
