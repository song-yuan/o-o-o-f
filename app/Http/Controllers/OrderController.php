<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\BillRepository;
use App\Repositories\BillLogRepository;

class OrderController extends Controller
{
    public $rep;
    public $logRep;
    public function __construct() {
        parent::__construct();
        $this->rep = new BillRepository();
        $this->logRep = new BillLogRepository();
        View::share('active','order');
    }
    public function index() {
        return view('order.index');
    }
    
    public function success() {
        
    }
    
    public function search(Request $request) {
        $orderSns = $request->input('order_sns');
        $orderSns = strtr($orderSns, array(
            "," => ",",
            "\r\n" => ",",
            " " => ""
        ));
        
        $orderSns = explode(',', $orderSns);
        $results = [];
        foreach($orderSns as $orderSn) {
            $billLogs = $this->logRep->findAllBy('bill_sn', $orderSn, ["log_id", "desc"]);
            $results[$orderSn] = $billLogs->toArray();
        }
        return view("order.search", array(
            "results" => $results
        ));
    }
}
