<?php

namespace App\Http\Controllers;

use Page;
/**
 *
 * @package Lavalite
 */
class PublicController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setupTheme(config('cms.themes.public.theme'), config('cms.themes.public.layout'));
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function home()
    {
        $data['page'] = Page::getPageBySlug('home');
        $this->theme->setTitle($data['page']->title);
        $this->theme->setKeywords($data['page']->keyword);
        $this->theme->setDescription($data['page']->description);

        $this->theme->layout('home');
        return $this->theme->of('public.home', $data)->render();
    }
}
