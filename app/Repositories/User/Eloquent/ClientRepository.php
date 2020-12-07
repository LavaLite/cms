<?php

namespace App\Repositories\User\Eloquent;

use Litepie\Repository\Eloquent\BaseRepository;
use App\Interfaces\User\ClientRepositoryInterface;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    public function boot()
    {
        $type = request('type', 'client');
        $this->fieldSearchable = config('users.'.$type.'.model.search');
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('users.client.model.model');
    }
}
