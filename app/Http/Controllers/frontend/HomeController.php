<?php

namespace App\Http\Controllers\frontend;
use App\home_page_client;
use App\backend\HomePageServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	 $clients = home_page_client::all();
    	 $services = HomePageServices::all();
        
    	return view('frontend.home',compact('clients','services'));
    }
    
    public function contacts(){
    	return view('frontend.contacts');
    }
    public function aboutUs(){
    	$clients = home_page_client::all();
    	return view('frontend.about-us',compact('clients'));
    }
    
}
