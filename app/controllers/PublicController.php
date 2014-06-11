<?php

class PublicController extends BaseController {

    public function __construct()
    {
        $this->setupTheme('public', 'default');

    }

    public function showIndex()
    {
        $data['page'] = Page::getPage('home');
        $this->theme->layout('home');
        $this -> theme -> setTitle($data['page'] -> title);
        $this -> theme -> setKeywords($data['page'] -> keyword);
        $this -> theme -> setDescription($data['page'] -> description);

        return $this->theme->of('public.home', $data)->render();
    }
}