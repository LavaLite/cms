<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Litepie\Http\Controllers\ResourceController as BaseController;

class ResourceController extends BaseController
{
    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        $user = $request->user()->toArray();
        return $this->response->setMetaTitle(__('Dashboard'))
            ->view('user.home')
            ->data(compact('user'))
            ->output();
    }
}
