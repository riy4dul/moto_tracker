<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// =======================Route For Frontend===================
Route::group(['namespace' => 'frontend'], function(){
    Route::get('contacts','HomeController@contacts')->name('contacts');
    Route::get('/','HomeController@index')->name('/');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
    
});




Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){
    Route::get('home-page','HomePageController@index')->name('homePage');

    Route::get('home-slider','HomePageController@slider')->name('homeSlider');

    Route::get('home-clients-list','HomePageController@clients')->name('homeOurClients');
    Route::get('home-clients-add','HomePageController@clientsAdd')->name('clientsAdd');

    Route::get('home-services','HomePageController@services')->name('homeServices');


    Route::get('about-us','HomePageController@aboutUs')->name('aboutUs');

    //==============Client==============
	// Route::get('client-list','CategoryController@index')->name('categoryList');
	Route::post('client-add','HomePageController@store')->name('clientStore');
    Route::post('client-delete/{id}','HomePageController@clientDestroy')->name('clientDelete');
});
