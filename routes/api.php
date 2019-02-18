<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;


Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
    
});

Route::apiResource('Products', 'ProductController');
Route::apiResource('Cart', 'CartController');