<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin;
//use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\reporter;


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
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
	Route::namespace('Auth')->group(function(){
    //Login Routes
    Route::get('/login',[admin\LoginController::class,'showAdminLoginForm'])->name('adminlogin');
    Route::post('/login',[admin\LoginController::class,'adminlogin']);
    Route::post('/logout',[admin\LoginController::class,'logout'])->name('adminlogout');

});
    Route::get('/home',[admin\HomeController::class,'index'])->name('adminhome');
   //category
    Route::resource('/category','\App\Http\Controllers\admin\CategoryController');
    //subcategory
    Route::resource('/subcategory','\App\Http\Controllers\admin\subcategoryController');
 //reporter
    Route::resource('/reporter','\App\Http\Controllers\admin\reportercontroller');

//post
    Route::resource('/reporterpost','\App\Http\Controllers\admin\reporterpostcontroller');
   
});

//user

	Route::namespace('Auth')->group(function(){
    //Login Routes
    Route::get('/login',[LoginController::class,'showUserLoginForm'])->name('userlogin');
    Route::post('/login',[LoginController::class,'login']);
    Route::post('/logout',[LoginController::class,'logout'])->name('userlogout');
});

//reporter
Route::prefix('/reporter')->name('reporter.')->namespace('Reporter')->group(function(){
	Route::namespace('Auth')->group(function(){
    //Login Routes
    Route::get('/login',[Reporter\LoginController::class,'showreporterLoginForm'])->name('reporterlogin');
    Route::post('/login',[Reporter\LoginController::class,'reporterlogin']);
    Route::post('/logout',[Reporter\LoginController::class,'logout'])->name('ureporterlogout');
});
Route::get('/home',[Reporter\HomeController::class,'index'])->name('reporterhome');
});

Route::get('/', function () {
    return view('welcome');
});
