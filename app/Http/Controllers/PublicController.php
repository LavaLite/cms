<?php

namespace App\Http\Controllers;

use Page;

/**
 *
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
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function home()
    {
        $page = Page::page('home');
        $this->theme->setTitle($page->title);
        $this->theme->setKeywords($page->keyword);
        $this->theme->setDescription($page->description);

        $this->theme->layout('home');

        return $this->theme->of('public.home', compact('page'))->render();
    }
}
