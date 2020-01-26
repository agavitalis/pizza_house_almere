<?php

//Application routes 
Route::group(['namespace'=>"Appp"],function(){
    
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/menu', 'MenuController@menu')->name('menu');
    Route::get('/contact', 'IndexController@contact')->name('contact');
    Route::get('/about', 'IndexController@about')->name('about');
    Route::get('/reservation', 'IndexController@reservation')->name('reservation');
    Route::get('/search', 'IndexController@search')->name('search');
    Route::get('/pizza_details', 'IndexController@pizza_details')->name('pizza_details');

    Route::match(['GET','POST'],'/cart/{cart_id?}', 'CartController@cart')->name('cart');
    Route::match(['GET','POST'],'/shopping_address', 'CartController@shopping_address')->name('shopping_address');
    Route::match(['GET','POST'],'/shopping_payment', 'CartController@shopping_payment')->name('shopping_payment');
    
    Route::match(['GET','POST'],'/complete_order', 'TransactionController@transaction')->name('complete_transaction');
    
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
