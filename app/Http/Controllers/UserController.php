<?php

namespace App\Http\Controllers;

use Request;
use Redirect;

class UserController extends Controller
{

    /**
     * Redirect path after an action.
     */
    protected $redirectPath;

    public function __construct()
    {
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
        $this->middleware('auth.user');
    }

    /**
     * Display dashboard
     *
     * @return response
     */
    public function home()
    {
        return $this->theme->of('public::user.dashboard')->render();
    }

    /**
     * Return success message.
     *
     * @param  int  $id
     * @return Response
     */
    public function error($message, $status = 400)
    {
        if(Request::ajax()) {
            return json_encode(['redirect' => $this->getRedirectPath(), 'status' => 'error']);
        }

        return Redirect::to($this->getRedirectPath()) -> withInput() -> with('error',  $message);
    }

    /**
     * Return error message.
     *
     * @param  int  $id
     * @return Response
     */
    public function success($message, $status = 201)
    {
        if(Request::ajax()){
            return json_encode(['redirect' => $this->getRedirectPath(), 'status' => 'success']);
        }

        return Redirect::to($this->getRedirectPath()) -> withInput() -> with('success',  $message);
    }

    /**
     * Return the redirect path.
     *
     * @param  int  $id
     * @return Response
     */
    public function getRedirectPath()
    {
        return $this->redirectPath;
    }

    /**
     * Return the redirect path.
     *
     * @param  int  $id
     * @return Response
     */
    public function setRedirectPath($path)
    {
        $this->redirectPath     = $path;
    }
}
