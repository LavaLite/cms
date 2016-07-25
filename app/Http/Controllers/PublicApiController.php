<?php

namespace App\Http\Controllers;

use Page;

class PublicApiController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->middleware('api');
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
