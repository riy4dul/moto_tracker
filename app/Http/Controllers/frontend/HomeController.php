<?php

namespace App\Http\Controllers\frontend;
use App\home_page_client;
use App\backend\HomePageServices;
use App\backend\PackageAndPrice;
use App\backend\software;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	 $clients = home_page_client::all();
    	 $services = HomePageServices::all();
         $software = software::first();
         // dd ($software);
    	return view('frontend.home',compact('clients','services','software'));
    }
    
    public function contacts(){
    	return view('frontend.contacts');
    }
    public function aboutUs(){
    	$clients = home_page_client::all();
    	return view('frontend.about-us',compact('clients'));
    }
    // ========================Price start======================================
    public function price (){
        $pakages = PackageAndPrice::all();
        return view('frontend.price-pakage',compact('pakages'));
    }
    // ========================Price End======================================
    
}
