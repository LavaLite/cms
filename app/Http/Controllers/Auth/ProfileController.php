<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Litepie\Http\Controllers\Controller as BaseController;
use Litepie\Http\Response\ResourceResponse;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;
use Litepie\User\Traits\UserPages;
use Form;

class ProfileController extends BaseController
{
    use RoutesAndGuards, ThemeAndViews, UserPages;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setGuard();
        $this->response = app(ResourceResponse::class);
        $this->middleware("auth:" . guard());
        $this->setTheme();
    }

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return $this->response
            ->layout('user')
            ->title(__('Dashboard'))
            ->view('home')
            ->output();
    }

    /**
     * Display user profile for editing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function profile(Request $request)
    {
        $user = $request->user()->only([
            'name',
            'email',
            'sex',
            'mobile',
            'languages',
            'designation',
            'picture',
        ]);
        $user['token'] = $request->header('Authorization');
        Form::populate($user);
        return $this->response->setMetaTitle(trans('Update') . ' ' . trans('user.user.title.profile'))
            ->data(compact('user'))
            ->layout('user')
            ->view('user.profile')
            ->output();
    }

    /**
     * Display user.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function password(Request $request)
    {
        $user = $request->user();
        return $this->response->setMetaTitle(trans('user.user.title.change_password'))
            ->data(compact('user'))
            ->layout('user')
            ->view('user.password')
            ->output();
    }

    /**
     * Update user profile.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function postProfile(Request $request)
    {
        $user = $request->user();
        return $this->response->setMetaTitle(trans('user.user.title.profile'))
            ->data(compact('user'))
            ->layout('user')
            ->view('user.profile')
            ->output();
    }

    /**
     * Display user.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function postPassword(Request $request)
    {
        $user = $request->user();
        return $this->response->setMetaTitle(trans('user.user.title.password'))
            ->data(compact('user'))
            ->layout('user')
            ->view('user.password')
            ->output();
    }

}
