<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $data['mobile'] = $request->mobile;
        $data['password'] = $request->password;

        // dd($data); تست دریافت متغییر
        $this->validate(
            $request,
            [
                'mobile' => 'required|max:11|min:11',
                'password' => 'required'
            ],
            [
                "mobile.required" => 'شماره موبایل الزامی می باشد',
                'mobile.min' => 'شماره موبایل درست وارد نشده است',
                'mobile.max' => 'شماره موبایل درست وارد نشده است',
                'password.required' => 'پسورد درست وارد نشده است'
            ]
        );
        $user = User::where('mobile', $data['password'])->first();

        if (!$user) {
            return redirect(route('login'))->with('$errors', 'نام کاربری موجود نمیباشد');
        } elseif (!Hash::check($request->get('password'), $user->password)) {
            return redirect(route('login'))->with('$errors', 'رمز عبور صحیح نمی باشد');
        } elseif (!$user->role == 'admin') {

            return redirect(route('login'))->with('$errors', 'شما به این صفحه دسترسی ندارید');
        }
        Auth::login($user);
        return redirect(route('index'));
    }
}
