<?php

namespace App\Http\Controllers;

use Litepie\Http\Controllers\PublicController as BaseController;
use Litepie\Http\Response\PublicResponse;

class PublicController extends BaseController
{

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->response = app(PublicResponse::class);
        $this->setTheme();
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = app(\Litecms\Page\Interfaces\PageRepositoryInterface::class)->getPage('home');

        return $this->response
            ->setMetaKeyword(strip_tags($data->meta_keyword))
            ->setMetaDescription(strip_tags($data->meta_description))
            ->setMetaTitle(strip_tags($data->meta_title))
            ->layout('home')
            ->view('home')
            ->data(compact('data'))
            ->output();
    }

}
