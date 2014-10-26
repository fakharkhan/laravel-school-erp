<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => 'guest'),function(){

    Route::get('/welcome', array('as' => 'welcome',function(){
        return View::make('guest.welcome');
    }));

    Route::get('/login',array('as' => 'login','uses' => 'AuthController@login'));
    Route::post('/login',array('as' => 'doLogin','uses' => 'AuthController@doLogin'));

});


Route::group(array('before' => 'auth'),function(){
    Route::get('/', array('as' => 'home','uses' => 'HomeController@home'));
    Route::get('/logout',array('as' => 'logout','uses' => 'AuthController@logout'));
});



App::missing(function(){
    return View::make('404');
});