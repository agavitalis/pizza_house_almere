<?php

//Application routes 
Route::group(['namespace'=>"Appp"],function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    
});

//User routes 
Route::group(['namespace'=>"User"],function(){
     
    Route::match(['GET','POST'],'/dashboard','DashboardController@dashboard')->name('dashboard');
    
});

//Admin routes 
Route::group(['namespace'=>"Admin"],function(){
     
    Route::match(['GET','POST'],'/admin_dashboard','IndexController@dashboard')->name('admin_dashboard');
    
});

Auth::routes();
