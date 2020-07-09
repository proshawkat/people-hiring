<?php

namespace App\Http\Controllers\Client\Auth;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function verify(Request $request)
    {
        if (!$request->hasValidSignature()) {
            throw new AuthorizationException;
        }
        $user = Client::find($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        $user->markEmailAsVerified();
        auth()->guard('clients')->login($user);
        return redirect($this->redirectPath());
    }
    public function show(Request $request)
    {
        if(!session()->get('_verify_email')){
            return redirect('/');
        }
        return view('client.auth.verify');
    }
    public function resend(Request $request)
    {
        if(!session()->get('_verify_email')){
            return redirect('/');
        }
        $user = Client::where('email',session()->get('_verify_email'))->first();
        $user->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}
