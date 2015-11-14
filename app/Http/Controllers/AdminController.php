<?php

namespace App\Http\Controllers;

use Response;

class AdminController extends Controller
{
    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth.role:admin');
        $this->setupTheme(config('cms.themes.admin.theme'), config('cms.themes.admin.layout'));
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->theme->of('admin::user.home')->render();
    }

    /**
     * Show admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return $this->theme->of('admin::user.profile')->render();
    }

    /**
     * Show locked screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function lock()
    {
        $this->theme->layout('blank');

        return $this->theme->of('admin::user.lock')->render();
    }

    /**
     * Show master table lists.
     *
     * @return \Illuminate\Http\Response
     */
    public function masters()
    {
        return $this->theme->of('admin::general.masters')->render();
    }

    /**
     * Show reports homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function reports()
    {
        return $this->theme->of('admin::general.reports')->render();
    }

    /**
     * Return success message.
     *
     * @param int $id
     *
     * @return Response
     */
    public function error($message, $status = 400)
    {
        return Response::json(['message' => $message, 'type' => 'error', 'title' => trans('messages.type.error')], $status);
    }

    /**
     * Return error message.
     *
     * @param int $id
     *
     * @return Response
     */
    public function success($message, $status = 201)
    {
        return Response::json(['message' => $message, 'type' => 'success', 'title' => trans('messages.type.success')], $status);
    }
}
