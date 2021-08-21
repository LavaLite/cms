<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\PermissionItemPresenter;
use Litepie\Roles\Interfaces\PermissionRepositoryInterface;
use Litepie\Roles\Repositories\Eloquent\PermissionRepository as LitepieRepository;

class PermissionRepository extends LitepieRepository implements PermissionRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return PermissionItemPresenter::class;
    }

}
