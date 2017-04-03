<?php
namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use View;

class ArticleController extends Controller
{
    public $rep;
    public function __construct() {
        parent::__construct();
        $this->rep = new ArticleRepository();
    }
    
    public function index(Request $request) {
        $newsCatIds = [2,3];
        $catId = $request->input('cat');
        if($catId && in_array($catId, $newsCatIds)) {
            $newsLists = $this->rep->getAll([$catId]);
        } else {
            $newsLists = $this->rep->getAll($newsCatIds);
        }
        
        View::share('active','article');
        return view('article.index', array(
            'newsLists' => $newsLists,
            'conditions' => array(
                "cat" => intval($catId)
            )
        ));
    }

    public function view($id) {
        $article = $this->rep->find($id);
        
        if(in_array($id, array(1,2,3,4,5))) {
            View::share('active','aboutus');
        }
        if(in_array($id, array(6,7,8))) {
            View::share('active','business');
        }
        
        return view('article.view', array(
            'article' => $article,
            'id' => $id
        ));
    }
    
}
