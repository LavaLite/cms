<?php

namespace app\Http\Controllers;

use Former\Facades\Former;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Teepluss\Theme\Facades\Theme;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

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
        //Former::framework('TwitterBootstrap3');
        //Former::config('fetch_errors', true);
        //Former::config('push_checkboxes', true);
    }
}
