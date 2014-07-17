<?php
use Former\Facades\Former;
use Teepluss\Theme\Facades\Theme;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;

class BaseController extends Controller {

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

    public function setupTheme($theme = 'defsault', $layout = 'default') {

        $this->theme = Theme::uses($theme)->layout($layout);

        Former::framework('TwitterBootstrap3');
        Former::config('fetch_errors', true);
    }


}