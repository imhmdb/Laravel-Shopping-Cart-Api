<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;


Route::group(['prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login')->name('login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
    
});

Route::apiResource('products', 'ProductController');
Route::apiResource('carts', 'CartController');
Route::post('/carts/{cart}', 'CartController@addProducts')->name('Add Products');
