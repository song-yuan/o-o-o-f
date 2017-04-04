<?php

namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Captcha;
class HomeController extends Controller
{
    public function __construct(Request $request) {
//        $user = $request->user();
//        var_dump($user);exit;
        parent::__construct();
    }
    public function index() {
        $articleRep = new ArticleRepository();
        $news1 = $articleRep->get(2);
        $news2 = $articleRep->get(3);
        
        return view('home/index', array(
            'news1' => $news1,
            'news2' => $news2
        ));
    }
    
    public function captcha() {
        return Captcha::create('default');
    }
}
