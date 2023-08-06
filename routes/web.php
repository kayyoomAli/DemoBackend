<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BuyProductController;






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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'login']);
Route::get('signup',[AuthController::class,'signup']);
Route::get('customelogin',[AuthController::class,'customelogin']);
Route::post('signupform',[AuthController::class,'signupform']);
Route::get('buyproduct/{id}',[BuyProductController::class,'buyproduct']);


Route::group(['middleware' => 'admin'], function ()
{
    Route::get('admindashboard',[AdminController::class,'admindashboard']);
    Route::get('adminlogout',[AdminController::class,'adminlogout']);
    Route::get('index',[CategoryController::class,'index']);
    Route::post('insert',[CategoryController::class,'insert']);
    Route::get('fetch',[CategoryController::class,'fetch']);
    Route::get('edit/{id}',[CategoryController::class,'edit']);
    Route::post('updatecat',[CategoryController::class,'update']);
    Route::get('register',[ProductController::class,'register']);
    Route::post('insertproducts',[ProductController::class,'insertproducts']);
    Route::get('show',[ProductController::class,'show']);
    Route::get('productedit/{id}',[ProductController::class,'edit']);
    Route::post('updateproduct',[ProductController::class,'update']);
    Route::get('destroy/{id}',[ProductController::class,'destroy']);

});

Route::group(['middleware' => 'user'], function ()
{
    Route::get('userdashboard',[UserController::class,'userdashboard']);
    Route::get('userlogout',[UserController::class,'userlogout']);
    Route::get('userprofile',[UserController::class,'userprofile']);
    Route::post('update',[UserController::class,'update']);
    Route::get('catogerieslist',[UserController::class,'catogerieslist']);
    Route::get('showproduct/{id}',[UserController::class,'showproduct']);

});



