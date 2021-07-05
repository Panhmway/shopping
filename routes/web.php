<?php

use Illuminate\Support\Facades\Route;


Route::get('/','PageController@index');
Route::get('/detail','PageController@productDetail');


Route::get('/admin/login',"Admin\AuthController@showLogin");
Route::group(['prefix'=>'admin','namespace'=>'Admin','as'=>'admin.'],function(){
    Route::get('/','PageController@dashboard');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');

    #for Order
    Route::get('/order/pending','OrderController@pending');
    Route::get('/order/complete','OrderController@complete');
    Route::get('/order/complete/{id}','OrderController@makeComplete');

    #for User

    Route::get('/user','PageController@alluser');
});
