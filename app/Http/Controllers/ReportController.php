<?php

namespace App\Http\Controllers;

use Litepie\User\Traits\RoutesAndGuards;
use Litepie\Theme\ThemeAndViews;
use App\Http\Response\ReportResponse;

class ReportController extends Controller
{
    use RoutesAndGuards, ThemeAndViews;

    public function __construct()
    {
        if (!empty(getenv('guard')) && getenv('guard') != 'web') {
            $this->middleware('auth:' . $this->getGuard());
        }
        $this->response = app(ReportResponse::class);
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
