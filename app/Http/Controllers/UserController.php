<?php

namespace App\Http\Controllers;

use Redirect;
use Request;

class UserController extends Controller
{


    public function __construct(\Illuminate\Http\Request $request)
    {
        $role   = $request->route('role');
        $this->middleware('auth.role:'.$role);
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
    }

    /**
     * Display dashboard.
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
     * @param int $id
     *
     * @return Response
     */
    public function error($message, $status = 400)
    {
        if (Request::ajax()) {
            return json_encode(['redirect' => $this->getRedirectPath(), 'status' => 'error']);
        }

        return Redirect::to($this->getRedirectPath())->withInput()->with('error', $message);
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
        if (Request::ajax()) {
            return json_encode(['redirect' => $this->getRedirectPath(), 'status' => 'success']);
        }

        return Redirect::to($this->getRedirectPath())->withInput()->with('success', $message);
    }

    /**
     * Return the redirect path.
     *
     * @param int $id
     *
     * @return Response
     */
    public function getRedirectPath()
    {
        return $this->redirectPath;
    }

    /**
     * Return the redirect path.
     *
     * @param int $id
     *
     * @return Response
     */
    public function setRedirectPath($path)
    {
        $this->redirectPath = $path;
    }
}
