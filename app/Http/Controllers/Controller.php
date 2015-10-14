<?php

namespace App\Http\Controllers;

use Former\Facades\Former;
use Teepluss\Theme\Facades\Theme;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Theme instance.
     *
     * @var \Teepluss\Theme\Theme
     */
    protected $theme;

    /**
     * Model instance.
     */
    protected $model;

    public function setupTheme($theme = 'default', $layout = 'default')
    {
        $this->theme = Theme::uses($theme)->layout($layout);
    }
}
