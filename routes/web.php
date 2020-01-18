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


//Application routes 
Route::group(['namespace'=>"Appp"],function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    Route::match(['GET','POST'],'/advert','IndexController@advert')->name('advert');
    
});

//User routes 
Route::group(['namespace'=>"Appp"],function(){
     
    Route::match(['GET','POST'],'/advert','IndexController@advert')->name('advert');
    
});

//Admin routes 
Route::group(['namespace'=>"Appp"],function(){
     
    Route::match(['GET','POST'],'/advert','IndexController@advert')->name('advert');
    
});

Auth::routes();
