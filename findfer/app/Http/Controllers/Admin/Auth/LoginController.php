<?php

namespace findfer\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use findfer\Http\Controllers\Controller;
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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $validator = $request->validate([
            'email'=>'required|string',
            'password'=>'required'
            ]);
        $credentials = ['email'=>$request->email,'password'=>$request->password];
        if(Auth::guard('admin')->attempt($credentials,$request->remember)){
            return redirect()->intended(route('admin.home'));
        }
        return redirect()->back()->withInputs($request->only('email','remember'));
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
