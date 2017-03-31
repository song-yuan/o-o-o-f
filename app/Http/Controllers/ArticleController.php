<?php
namespace App\Http\Controllers;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $rep;
    public function __construct() {
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
        
        return view('article.index', array(
            'newsLists' => $newsLists,
            'conditions' => array(
                "cat" => intval($catId)
            )
        ));
    }

    public function view($id) {
        $article = $this->rep->find($id);
        
        return view('article.view', array(
            'article' => $article
        ));
    }
    
}
