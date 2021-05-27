<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    // 'register' => false, // Registration Routes...
    // 'reset' => false, // Password Reset Routes...
    // 'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::view('/dashboard', 'dashboard');
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('login');
    });
    Route::resource('admin/site-setting', 'Admin\\SiteSettingController')->only('edit','update');
});

//-----------------------------------------------------------//||
Route::get('/home', 'HomeController@index')->name('home'); //||
Route::get('/crud2index', 'HomeController@crud2index'); //||
Route::post('/jsonSave', 'HomeController@jsonSave'); //||
Route::post('/crudMaker', 'HomeController@crudMaker'); //||
//-----------------------------------------------------------//||

Route::get('/', function () {
    return view('welcome');
});
