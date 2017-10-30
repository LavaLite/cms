<?php

namespace App\Http\Controllers;

use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;
use App\Http\Response\PublicResponse;

class PublicController extends Controller
{
    use ThemeAndViews, RoutesAndGuards;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->response = app(PublicResponse::class);
        $this->setTheme('public');
    }


    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->response->title('Home')
            ->view('home')
            ->output();
    }

}
