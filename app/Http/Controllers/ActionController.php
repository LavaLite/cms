<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\RoutesAndGuards;
use Litepie\Theme\ThemeAndViews;

class ActionController extends Controller
{
    use RoutesAndGuards, ThemeAndViews;

    public function __construct()
    {
        if (!empty(app('auth')->getDefaultDriver())) {
            $this->middleware('auth:' . app('auth')->getDefaultDriver());
        }

        $this->setTheme();
    }

    /**
     * Show reports homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {
        return $this->theme->of('admin::general.reports')->render();
    }
}
