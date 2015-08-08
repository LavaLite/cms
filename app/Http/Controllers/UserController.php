<?php namespace App\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use User;
use Session;
use Event;
use Page;

class UserController extends Controller
{

    public function __construct()
    {
        $this->setupTheme(config('cms.themes.user.theme'), config('cms.themes.user.layout'));
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
    public function postLogin(Request $request)
    {

        $input      = $request->only('email', 'password', 'type');
        $remember   = $request->get('rememberme');

        try
        {
            // Authenticate the user
            $user = User::authenticate($input, $remember);
            return Redirect::intended('/user');

        } catch (\Lavalite\user\Exceptions\LoginRequiredException $e) {
            $result = 'Login field is required.';
        } catch (\Lavalite\user\Exceptions\PasswordRequiredException $e) {
            $result = 'Password field is required.';
        } catch (\Lavalite\user\Exceptions\WrongPasswordException $e) {
            $result = 'Wrong password, try again.';
        } catch (\Lavalite\user\Exceptions\UserNotFoundException $e) {
            $result = $e->getMessage();//'User was not found.';
        } catch (\Lavalite\user\Exceptions\UserNotActivatedException $e) {
            $result = 'User is not activated.';
        }

        // The following is only required if the throttling is enabled
        catch (\Lavalite\user\Exceptions\UserSuspendedException $e) {
            $result = 'User is suspended.';
        } catch (\Lavalite\user\Exceptions\UserBannedException $e) {
            $result = 'User is banned.';
        }

        Session::flash('error', $result);

        return Redirect::to('login')->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int      $id
     * @return Response
     */
    public function logout()
    {
        User::logout();
        Event::fire('user.logout');
        return Redirect::to('/login');
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function register()
    {
        return $this->theme->of('user.register')->render();
    }

    /**
     * Store a newly created user.
     *
     * @return Response
     */
    public function postRegister(Request $request)
    {


        $input          = $request -> only(['name', 'email', 'password']);
        $input['type']  = 'User';

        try
        {
            // Authenticate the user
            User::register($input);
            return Redirect::intended('/user');

        } catch (\Lavalite\user\Exceptions\LoginRequiredException $e) {
            $result = 'Login field is required.';
        } catch (\Lavalite\user\Exceptions\PasswordRequiredException $e) {
            $result = 'Password field is required.';
        } catch (\Lavalite\user\Exceptions\WrongPasswordException $e) {
            $result = 'Wrong password, try again.';
        } catch (\Lavalite\user\Exceptions\UserNotFoundException $e) {
            $result = $e->getMessage();//'User was not found.';
        } catch (\Lavalite\user\Exceptions\UserNotActivatedException $e) {
            $result = 'User is not activated.';
        } catch (Exception $e) {
            $result = 'User is not activated.';
        }
echo $result;

        if ($result['success']) {

            // Success!
            Session::flash('success', $result['message']);

            return Redirect::to('/checkActive');

        } else {
            Session::flash('error', $result['message']);

            return Redirect::to('register')->withErrors($result['errors'])->withInput();
        }
    }

    public function getProfile()
    {

        if(User::check()){

            if(!User::getUser()->hasAccess('admin')){

                $id = User::getUser()->id;
                $user['user'] = $this->user->find($id);
                return $this->theme->of('user::user.public.profile',$user)->render();
            } else {


                return Redirect::to('login');
            }
        } else {

             return Redirect::to('login');
        }

    }



    public function postProfile()
    {

        $id     = User::getUser()->id;
        $result = $this->user->profileedit($id);
        if ($result['success']) {
            // Success!
            Session::flash('success', $result['message']);
            return Redirect::to('user/profile');

        } else {
            Session::flash('error', $result['message']);
            return Redirect::to('user/profile')
                ->withInput()
                ->withErrors($result['errors']);
        }

    }


    /**
     * Process resend activation request
     * @return Response
     */
    public function resend()
    {
        // Form Processing

        $result = $this->user->resend( Input::all() );

        if ($result['success']) {

            Event::fire('user.resend', array(
                'email' => $result['mailData']['email'],
                'userId' => $result['mailData']['userId'],
                'activationCode' => $result['mailData']['activationCode']
            ));
            // Success!
            Session::flash('success', $result['message']);

            return Redirect::to('login');
        } else {
            Session::flash('error', $result['message']);

            return Redirect::to('resend')
                ->withInput()
                ->withErrors($result['errors']);
        }
    }

    /**
     * Process resend activation request
     * @return Response
     */
    public function getResend()
    {
        // Form Processing
        return $this->theme->of('user::user.public.resend')->render();

    }

    /**
     * Process Forgot Password request
     * @return Response
     */
    public function forgot()
    {

        // Form Processing
        User::forgotPassword(Input::all());
        if ($result['success']) {

            // Success!
            Session::flash('success', $result['message']);

            return Redirect::to('/login');
        } else {

            Session::flash('error', $result['message']);
            return Redirect::to('forgot')
                ->withInput()
                ->withErrors($result['errors']);
        }

    }

    /**
     * Show Forgot Password form
     * @return Response
     */
    public function getForgot()
    {
        // Display form
       return $this->theme->of('user::user.public.forgot')->render();

    }

    /**
     * Process a password reset request link
     * @param  [type] $id   [description]
     * @param  [type] $code [description]
     * @return [type] [description]
     */
    public function reset($id,$code)
    {
        if (!is_numeric($id)) {
            // @codeCoverageIgnoreStart
            return \App::abort(404);
            // @codeCoverageIgnoreEnd
        }

        $result = $this->user->resetPassword($id, $code);

        if ($result['success']) {
            Event::fire('user.newpassword', array(
                'email' => $result['mailData']['email'],
                'newPassword' => $result['mailData']['newPassword']
            ));

            // Success!
            Session::flash('success', $result['message']);

            return Redirect::to('/login');

        } else {
            Session::flash('error', $result['message']);

            return Redirect::route('/login');
        }
    }


    public function home()
    {
        $data['page'] = Page::getPage('user');
        $this -> theme -> setTitle($data['page'] -> title);
        $this -> theme -> setKeywords($data['page'] -> keyword);
        $this -> theme -> setDescription($data['page'] -> description);

        return $this->theme->of('user.home', $data)->render();
    }
}
