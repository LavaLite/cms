<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\RoleItemPresenter;
use Litepie\Roles\Interfaces\RoleRepositoryInterface;
use Litepie\Roles\Repositories\Eloquent\RoleRepository as LitepieRepository;

class RoleRepository extends LitepieRepository implements RoleRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return RoleItemPresenter::class;
    }
}
