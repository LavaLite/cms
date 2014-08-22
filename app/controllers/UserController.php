<?php


class UserController extends BaseController {

    protected $session;

    public function __construct()
    {
        $this->session = App::make('Lavalite\User\Interfaces\SessionInterface');
        $this->setupTheme(Config::get('lavalite.user.theme'), Config::get('lavalite.user.layout'));
    }

    /**
     * Show the login form
     */
    public function login()
    {
        return $this->theme->of('user.login')->render();
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
            $path = Session::get('url.intended', '/user');
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

        return Redirect::to('/shop');
    }

    public function showHome()
    {
        $data['page'] = Page::getPage('welcome');
        $this->theme->layout('home');
        $this -> theme -> setTitle($data['page'] -> title);
        $this -> theme -> setKeywords($data['page'] -> keyword);
        $this -> theme -> setDescription($data['page'] -> description);

        return $this->theme->of('user.home', $data)->render();
    }
}