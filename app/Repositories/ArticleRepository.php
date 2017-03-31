<?php
namespace App\Repositories;

use App\Models\Article;
use Validator;

class ArticleRepository extends BaseRepository{
    public function __construct()
	{
		$this->model = new Article();
	}
    
    public $rule = [
        'category_id' => 'required|integer', 
        'title' => 'required|string|between:2,255',
        'sub_head' => 'required|string|between:2,255',
        'content' => 'required|string|between:2,255',
    ];
    
	public function validator(array $data) {
		return Validator::make($data, $this->rule, trans('article'));
	}
    
    public function get($cat = 1, $limit = 5) {
        return $this->model->where('category_id', '=', $cat)->limit($limit)->orderBy('article_id', 'desc')->get();
    }
    
    public function getAll($cats, $pageSize = 10) {
        return $this->model->whereIn('category_id', $cats)
                ->orderBy('article_id', 'desc')
                ->paginate($pageSize);
    }
}