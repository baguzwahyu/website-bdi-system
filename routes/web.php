<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Administrator
Route::group(['prefix' => 'administrator'],function (){
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('administrator.login');
    Route::group(['middleware'=>'auth'],function (){
        // Route::post('/login', 'Auth\AdminLoginController@login')->name('administrator.login.post');
        // Route::post('/logout', 'Auth\AdminLoginController@logout')->name('administrator.logout');
    });
});

// Frontend
Route::get('/', function () {
    return view('frontend.mainpage.home');
});
