<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AuthClientController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'client/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:clients');
    }

    public function showRegiter(){
        return view('client.auth.register');
    }

    /**
     * Crate User Account
     */

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));


        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    public function registerClient(Request $request)
    {

        $this->customerValidator($request->all())->validate();

        try{
            $client = $this->create($request->all());
            event(new Registered($client));
            return $this->registered($request, $client)
                ?: redirect($this->redirectPath())
                    ->with("Registration successful! A verification mail has send to your email address. Please verify your email, then try to sign in.");
        }catch (\Exception $exception){

            return redirect()->back()->withAlert([
                'status'    => false,
                'message'   => 'Please, Try again!'
            ]);
        }

    }


    protected function guard()
    {
        return Auth::guard('clients');
    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:6|confirmed',
            'phone'    => 'required|min:11|max:11|unique:clients',
        ]);
    }

    protected function customerValidator(array $data)
    {
        return Validator::make($data, [
            'name'   => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
    }

    protected function create(array $data)
    {

//        dd($data);
        return Client::create([
            'name'      => $data['name'],
            'company_name'      => $data['company_name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'phone'     => $data['phone'],
            'status'   => 0
        ]);
    }


}
