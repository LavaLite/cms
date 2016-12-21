<?php

namespace App\Http\Controllers\Api;

use Page;

class PublicController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function home()
    {
        $this->theme->layout('home');

        return $this->theme->of('public::home', compact('page'))->render();
        parent::__construct();
    }
}
