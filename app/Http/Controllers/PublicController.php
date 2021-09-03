<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Litepie\Http\Controllers\PublicController as BaseController;
use Pages;

class PublicController extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = Pages::getPage('home');
        return $this->response
            ->setMetaKeyword(strip_tags($data['meta_keyword']))
            ->setMetaDescription(strip_tags($data['meta_description']))
            ->setMetaTitle(strip_tags($data['meta_title']))
            ->layout('home')
            ->view('home')
            ->data(compact('data'))
            ->output();
    }

}
