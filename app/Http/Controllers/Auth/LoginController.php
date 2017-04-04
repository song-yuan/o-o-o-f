<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Validator;
use Captcha;
use Auth;

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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $rep;
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['except' => 'logout']);
        $this->rep = new UserRepository();
    }
    
    public function index() {
        $captcha = Captcha::src();
        return view('auth.login', array(
            'captcha' => $captcha
        ));
    }
    
    public function login(Request $request) {
        $rule = [
            'mobile' => array(
                'required',
                'regex:/(1(34[0-8]|705)\d{7})|(1(3[5-9]|4[0-2,7,8]|5[^356]|8[2-4]|8[78]|78)\d{8})|(1(3[0-2]|45|5[56]|8[56]|76)\d{8})|(1709\d{7,7})|(1(33|53|80|81|89|77)\d{8})|((1349|1700)\d{7})/',
                'digits:11'
            ),
            "captcha" => 'required|captcha',
            'password' => 'required|alpha_dash|string|min:6',
        ];
        $userData = $request->input('user');
        
		$validator = Validator::make($userData, $rule, trans('user'));
		if ($validator->fails()) {
            return redirect()->back()->withInput($userData)->withErrors($validator);
		}
        $user = $this->rep->findBy('mobile', $userData['mobile']);
        if(!$user) {
            $validator->errors()->add('mobile', '用户名或者密码错误');
            return redirect()->back()->withInput($userData)->withErrors($validator);
        }
        
        if(hashPwd($userData['password']) != $user->password) {
            $validator->errors()->add('mobile', '用户名或者密码错误');
            return redirect()->back()->withInput($userData)->withErrors($validator);
        }
        
		Auth::loginUsingId($user->user_id);
        return redirect('/');
    }
    
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
