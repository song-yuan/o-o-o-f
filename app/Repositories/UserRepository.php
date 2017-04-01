<?php
namespace App\Repositories;

use App\Models\User;
use Validator;

class UserRepository extends BaseRepository{
    public function __construct() {
		$this->model = new User();
	}
    
    public $rule = [
        'user_name' => 'required|email',
        'email' => 'required_without_all:email,mobile|email|max:100',
        'mobile' => array(
            'required_without_all:email,mobile',
            'regex:/(1(34[0-8]|705)\d{7})|(1(3[5-9]|4[0-2,7,8]|5[^356]|8[2-4]|8[78]|78)\d{8})|(1(3[0-2]|45|5[56]|8[56]|76)\d{8})|(1709\d{7,7})|(1(33|53|80|81|89|77)\d{8})|((1349|1700)\d{7})/',
            'digits:11'
        ),
        'sex' => 'required|email',
        'password' => 'required|string|min:6',
    ];
    
    public function lists($mobile = '', $pageSize = 10) {
        if($mobile) {
            return $this->model->where('mobile', $mobile)->orderBy('user_id', 'desc')->paginate($pageSize);
        }
        return $this->model->orderBy('user_id', 'desc')->paginate($pageSize);
    }
}