<?php

namespace App;

use Litepie\User\Models\Client as BaseClient;

class Client extends BaseClient
{
    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'users.client.model';

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $role = 'client';

}
