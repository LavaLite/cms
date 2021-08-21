<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Presenters\SettingItemPresenter;
use Litepie\Settings\Interfaces\SettingRepositoryInterface;
use Litepie\Settings\Repositories\Eloquent\SettingRepository as LitepieRepository;

class SettingRepository extends LitepieRepository implements SettingRepositoryInterface
{

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return SettingItemPresenter::class;
    }

}
