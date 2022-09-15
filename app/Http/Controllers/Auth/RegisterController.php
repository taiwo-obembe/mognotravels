<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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


    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function signupAccount(Request $request){
        try {
            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }

            }
            $user = new User;
            $user->name = $request->name;
            $user->mobile = $request->mobile;
            $user->roles = 'member';
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->uuid = (string) \Str::uuid();
            $user->save();
            $message = "Account Created successfully";
            $url  = route('login');
            return response()->json(['message' => $message, "url" => $url],200);

        } catch (Exception $error) {
            Log::info('errorMessage:' . $error->getMessage());
        }
    }
}
