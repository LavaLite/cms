<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\MasterItemPresenter;
use Litepie\Master\Interfaces\MasterRepositoryInterface;
use Litepie\Master\Repositories\Eloquent\MasterRepository as LitepieRepository;

class MasterRepository extends LitepieRepository implements MasterRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return MasterItemPresenter::class;
    }
}
