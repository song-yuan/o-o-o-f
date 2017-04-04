<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Auth;
use Captcha;


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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)
    {
        $userData = $request->input('user');
        $userRep = new UserRepository();
        
        if(!isset($userData['sex'])) {
            $userData['sex'] = 1;
        } else {
            $userData['sex'] = 0;
        }
        
		$validator = $userRep->validator($userData);
		if ($validator->fails()) {
            return redirect()->back()->withInput($userData)->withErrors($validator);
		}
        
        $userData['password'] = hashPwd($userData['password']);
        $user = $userRep->create($userData);
		Auth::loginUsingId($user->user_id);
        return redirect('/');
    }
    
    
    public function index() {
        $captcha = Captcha::src();
        return view('auth.register', array(
            "captcha" => $captcha
        ));
    }
    
}
