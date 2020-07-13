<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginClientController extends Controller
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
    protected $redirectTo = '/client/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:clients')->except('logout');
    }

    public function login(Request $request){
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            $user = auth('clients')->user();
            if (empty($user->email_verified_at)){
                $user->sendEmailVerificationNotification();
                session()->put('_verify_email',$user->email);
                $this->guard()->logout();
                return redirect()->route('verification.notice');
            }
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }

    public function logout()
    {
        $this->guard()->logout();

        return redirect()->route('client.login');
    }

//    public function login(Request $request)
//    {
//        dd($request);
//    }

    protected function guard()
    {
        return Auth::guard('clients');
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:clients,email,status,1',
            'password' => 'required',
        ]);
    }


    public function redirectPath()
    {
        return '/client/home';
    }

}
