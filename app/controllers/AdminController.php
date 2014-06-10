<?php


class AdminController extends BaseController {

    protected $session;

    public function __construct()
    {
        $this->session = App::make('Lavalite\User\Interfaces\SessionInterface');
        $this->setupTheme('admin', 'default');

    }

    public function clearCache()
    {
		Cache::flush();
		return $this->theme->of('admin.cache')->layout('blank')->render();
    }

    /**
     * Show the login form
     */
    public function login()
    {
        $this->theme->layout('blank');
        return $this->theme->of('admin.login')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postLogin()
    {

        $input = Input::all();

        $result = $this->session->store($input);

        if ($result['success']) {

           // Success!
            $path = Session::get('url.intended', '/admin');
            Session::forget('url.intended');
            return Redirect::to($path);

        } else {
            Session::flash('error', $result['message']);

            return Redirect::to('login')->withErrors($result['errors'])->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function logout()
    {
        $this->session->destroy();
        Event::fire('user.logout');

        return Redirect::to('/admin');
    }


    public function showHome()
    {
        $this->theme->prependTitle(Lang::get('app.admin_panel') . ' :: ');
        return $this->theme->of('admin.home')->layout('blank')->render();
    }

}