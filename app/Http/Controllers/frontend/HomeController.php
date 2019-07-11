<?php

namespace App\Http\Controllers\frontend;
use App\home_page_client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	 $clients = home_page_client::all();
        
    	return view('frontend.home',compact('clients'));
    }
    
    public function contacts(){
    	return view('frontend.contacts');
    }
}
