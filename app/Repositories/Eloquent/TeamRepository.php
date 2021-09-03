<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\TeamItemPresenter;
use Litepie\Team\Interfaces\TeamRepositoryInterface;
use Litepie\Team\Repositories\Eloquent\TeamRepository as LitepieRepository;

class TeamRepository extends LitepieRepository implements TeamRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return TeamItemPresenter::class;
    }

}
