<?php

namespace App\Http\Controllers;
use App\Repositories\BillRepository;

class OrderController extends Controller
{
    public function __construct() {
        
    }
    public function index() {
        
        return view('order.index');
    }
    
    public function success() {
        
    }
    
    
}
