<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function loginView()
    {
        return view('Auth.login');
    }


    protected function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            Session::put('errorMessage', 'Opps! You have entered invalid credentials');
            return redirect()->route('auth.login.account');
        }
        $user = Auth::user();

        if ($user->roles === "admin" ||  $user->roles === "support") {
            return response()->redirectToRoute('admin.dashboard');
        }
        return response()->redirectToRoute('user.dashboard');
    }


    public function logout()
    {
        Auth::logout();
        return response()->redirectToRoute('auth.login.account');
    }
}


