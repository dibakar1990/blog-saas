<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $username;
    protected $redirectTo = '/password/confirm';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        private UserService $userService
    ){
        $this->username = $this->findUsername();
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function validateLogin(Request $request)
    {
        
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
      
        $success = $this->guard()->attempt(
            $this->credentials($request), $request->boolean('remember')
        );
       if($success == true){
            if (!App::environment('local')){
                $user_activity = 'user attempted to login';
                $ip = $request->ip();
                $this->userService->enterActivity($user_activity,$ip, $request->email);
            }
            return $success;
       }else{
            if (!App::environment('local')){
                $user_activity = 'user attempted to login failed';
                $ip = $request->ip();
                $this->userService->enterActivity($user_activity,$ip, $request->email);
            }
            return $success;
       }
    }

    protected function credentials(Request $request)
    {
       
        return [
            
            'email' => $request->{$this->username()},
            'password' => $request->password,
            'status' => 1,
            'role' => ['super-admin','admin'],
        ];
    }

    public function findUsername()
    {
        $login = request('username');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }

    public function username()
    {
        return $this->username;
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()->with([
            'error' => 'The provided credentials do not match our records.'
        ], 406);
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function logout(){
        Session::flush();
        $this->guard()->logout();         
        return Redirect('/login');
    }
}
