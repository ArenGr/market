<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

     /* public function __construct() */ 
     /* { */ 
     /*     $this->middleware('auth'); */ 
     /* } */ 
     /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.dashboard');
    }
}
