<?php

namespace App;

use Litepie\User\Models\Client;

class Client extends Client
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
