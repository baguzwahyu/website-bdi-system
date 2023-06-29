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
Route::group(['prefix' => 'administrator'], function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('administrator.login');
    Route::group(['middleware' => 'auth'], function () {
        // Route::post('/login', 'Auth\AdminLoginController@login')->name('administrator.login.post');
        // Route::post('/logout', 'Auth\AdminLoginController@logout')->name('administrator.logout');
    });
});

// Frontend
Route::get('/', ['as' => 'home', 'uses' => function () {
    return view('frontend.mainpage.home');
}]);

Route::get('/diklat3in1', ['as' => 'diklat3in1', 'uses' => function () {
    return view('frontend.diklat3in1');
}]);

Route::get('/inkubatorbisnis', ['as' => 'inkubatorbisnis', 'uses' => function () {
    return view('frontend.inkubatorbisnis');
}]);

Route::get('/strukturorganisasi', ['as' => 'strukturorganisasi', 'uses' => function () {
    return view('frontend.strukturorganisasi');
}]);

Route::get('/dokumenpublik', ['as' => 'dokumenpublik', 'uses' => function () {
    return view('frontend.dokumenpublik');
}]);

Route::get('/kerjasamaindustri', ['as' => 'kerjasamaindustri', 'uses' => function () {
    return view('frontend.kerjasamaindustri');
}]);

Route::get('/spanlapor', ['as' => 'spanlapor', 'uses' => function () {
    return view('frontend.spanlapor');
}]);

Route::get('/maklumatpelayananpublik', ['as' => 'maklumatpelayananpublik', 'uses' => function () {
    return view('frontend.maklumat');
}]);

Route::get('/laporgratifikasi', ['as' => 'laporgratifikasi', 'uses' => function () {
    return view('frontend.laporgratifikasi');
}]);

Route::get('/wbs', ['as' => 'wbs', 'uses' => function () {
    return view('frontend.wbs');
}]);

Route::get('/pengaduan', ['as' => 'pengaduan', 'uses' => function () {
    return view('frontend.pengaduan');
}]);

Route::get('/surveypresensikorupsi', ['as' => 'surveypresensikorupsi', 'uses' => function () {
    return view('frontend.surveypresensikorupsi');
}]);

Route::get('/privacypolicy', ['as' => 'privacypolicy', 'uses' => function () {
    return view('frontend.privacypolicy');
}]);

Route::get('/hapusakun', ['as' => 'hapusakun', 'uses' => function () {
    return view('frontend.hapusakun');
}]);

// Route::get('/folders/list/{id?}', ['as' => 'folders.list', 'uses' => 'FoldersController@getAllFolders'])
