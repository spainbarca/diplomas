<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page Route
Route::get('/', [PageController::class, 'blankPage'])->middleware('verified');
Route::get('/', [PageController::class, 'blankPage']);

Route::get('/page-blank', [PageController::class, 'blankPage']);
Route::get('/page-collapse', [PageController::class, 'collapsePage'])->name('page.collapse');;

// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::group(['prefix' => 'user', 'middleware'=> 'auth'], function(){

    Route::get('profile/portal', [ProfilesController::class, 'portal'])->name('user.profile.portal');
    Route::resource('profile', ProfilesController::class, ['as' =>'user']);

});

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user', UserController::class);
Route::resource('/moderator', ModeratorController::class);



Auth::routes(['verify' => true]);



/* Route::match(['get', 'post'], '/user/dashboard', function(){
    return view('user.dashboard');
})->middleware('auth')->name('user.dashboard');

Route::match(['get', 'post'], '/user', function(){
    return view('user.dashboard');
})->middleware('auth')->name('user.dashboard'); */


