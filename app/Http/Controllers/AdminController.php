<?php namespace App\Http\Controllers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use User;
use Session;
use Config;
use Event;

class AdminController extends Controller
{
    protected $session;


    public function __construct()
    {

        $this->setupTheme(Config::get('cms.themes.admin.theme'), Config::get('cms.themes.admin.layout'));
        $this->middleware('auth.admin', ['except' => ['login', 'postLogin', 'logout']]);
    }

    /**
     * Show the login form
     */
    public function login()
    {
        $this->theme->layout('blank');

        return $this->theme->of('admin::login')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postLogin(Request $request)
    {

        $input = $request->only('email', 'password');

        try
        {
            // Authenticate the user
            $user = User::authenticate($input, false);
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

        if (User::check()) {

            return Redirect::intended('/admin');

        } else {
            Session::flash('error', $result);

            return Redirect::to('admin/login')->withInput();
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
        User::logout();
        Event::fire('user.logout');

        return Redirect::to('/admin/login');
    }

    public function showHome()
    {
        return $this->theme->of('admin::home')->render();
    }


    /**
     * Filter the incoming requests.
     */
    public function filterRequests($route, $request)
    {
        if (!is_object(User::getUser()) || !User::getUser()->hasAnyAccess('admin')) return Redirect::guest('/login');
    }
}
