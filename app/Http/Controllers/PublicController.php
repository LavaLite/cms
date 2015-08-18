<?php

namespace App\Http\Controllers;

use Page;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->setupTheme(config('cms.themes.public.theme'), config('cms.themes.public.layout'));
    }

    public function home()
    {
        $data['page'] = Page::getPage('home');
        $this->theme->setTitle($data['page']->title);
        $this->theme->setKeywords($data['page']->keyword);
        $this->theme->setDescription($data['page']->description);

        $this->theme->layout('home');
        return $this->theme->of('public.home', $data)->render();
    }
}
