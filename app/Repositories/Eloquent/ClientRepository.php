<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\ClientItemPresenter;
use Litepie\User\Interfaces\ClientRepositoryInterface;
use Litepie\User\Repositories\Eloquent\ClientRepository as LitepieRepository;

class ClientRepository extends LitepieRepository implements ClientRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return ClientItemPresenter::class;
    }
}
