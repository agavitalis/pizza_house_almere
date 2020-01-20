<?php

//Application routes 
Route::group(['namespace'=>"Appp"],function(){
    
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/menu', 'IndexController@menu')->name('menu');
    Route::get('/contact', 'IndexController@contact')->name('contact');
    
});

//User routes 
Route::group(['namespace'=>"User"],function(){
     
    Route::match(['GET','POST'],'/dashboard','DashboardController@dashboard')->name('dashboard');
    
});

//Admin routes 
Route::group(['namespace'=>"Admin"],function(){
     
    Route::match(['GET','POST'],'/admin_dashboard','DashboardController@dashboard')->name('admin_dashboard');
    
    Route::match(['GET','POST'],'/admin_create_menu','MenuController@create_menu')->name('admin_create_menu');
    Route::match(['GET','POST'],'/admin_manage_menu','MenuController@manage_menu')->name('admin_manage_menu');
    
    Route::match(['GET','POST'],'/admin_create_pizza','PizzaController@create_pizza')->name('admin_create_pizza');
    Route::match(['GET','POST'],'/admin_manage_pizza','PizzaController@manage_pizza')->name('admin_manage_pizza');
   
    Route::match(['GET','POST'],'/admin_orders','OrderController@orders')->name('admin_orders');
    Route::match(['GET','POST'],'/admin_orders_latest','OrderController@orders_latest')->name('admin_orders_latest');
    Route::match(['GET','POST'],'/admin_orders_processing','OrderController@orders_processing')->name('admin_orders_processing');
    Route::match(['GET','POST'],'/admin_orders_delivered','OrderController@orders_delivered')->name('admin_orders_delivered');

});

Auth::routes();
