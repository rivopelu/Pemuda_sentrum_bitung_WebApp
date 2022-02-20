<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\componen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\category;

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


// ----------------> FRONTEND <------------------------
Route::get('/', function () {
    return view('frontend.content.home');
});





Route::controller(UserController::class)->group(function(){
    Route::get('/dashboard/users', 'index');
});

// ------------------>DASHBOARD<----------------------------
Route::controller(componen::class)->group( function(){
    route::get('/dashboard', 'index');
    // --------------->CATEEGORY ROUTE<----------------------
    route::post('/create-category', 'storeCategory')->name('store.category');
    route::post('/destroy-category/{category}', 'destroyCategory');

    // ---------------->TAGS ROUTE<-----------------------
    route::post('/create-tag', 'storeTag');
    route::post('/destroy-tag/{tag}', 'destroyTag');


    // --------------->INFORMASI ROUTE <--------------
    Route::get('/dashboard/info','indexInfo');
    Route::get('/dashboard/info/create','createInfo');
    Route::post('/dashboard/info/create','storeInfo');
    route::post('/destroy-info/{info}', 'destroyInfo');
   

});





Route::post('/logout',[LoginController::class, 'logout']);

// middleware guest
Route::group(['middleware' => 'guest'], function()
{
    // ------------->login<---------------
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    
    
    // ------------>register<-------------
    Route::controller(RegisterController::class)->group(function() {
        // manual register
        Route::get('/register', 'index');
        Route::post('/register', 'store');
        // login google
        Route::get('auth/google', 'redirectToGoogle');
        Route::get('auth/google/callback', 'handleGoogle');
        // login Facebook
        Route::get('auth/facebook', 'redirectTofacebook')->name('facebook.login');
        Route::get('auth/facebook/callback', 'handlefacebook')->name('facebook.callback');
    });
});

