<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Theme;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * Store theme
     */
    public $theme;

    /* Setup theme for the controller.
     *
     */
    public function setupTheme($theme = 'default', $layout = 'default')
    {
        $this->theme = Theme::uses($theme)->layout($layout);
    }
}
