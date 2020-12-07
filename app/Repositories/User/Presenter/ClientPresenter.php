<?php

namespace App\Repositories\User\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class ClientPresenter extends FractalPresenter
{
    /**
     * Prepare data to present.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ClientTransformer();
    }
}
