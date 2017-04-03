<?php

namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;

class HomeController extends Controller
{
    public function __construct() {
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
        return captcha_src();
    }
}
