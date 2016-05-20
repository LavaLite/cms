<?php

namespace App\Http\Controllers;

use Page;

class PublicWebController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
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
    }
}
