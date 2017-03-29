<?php

namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    public $rep;
    public function __construct() {
        $this->rep = new ArticleRepository();
    }
    
    public function index() {
        $news1 = $this->rep->get(2);
        $news2 = $this->rep->get(3);
        
        return view('home/index', array(
            'news1' => $news1,
            'news2' => $news2
        ));
    }

    public function view($id) {
        $article = $this->rep->find($id);
        
        return view('article.view', array(
            'article' => $article
        ));
    }
    
}
