<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DeleteController;
use App\User;

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
    return view('/newLogin');
});

Auth::routes();
Route::resource('/home', 'HomeController');
Route::get('/login/facebook', [LoginController::class, 'redirectToProvider']);
Route::get('/login/facebook/callback', [LoginController::class, 'handleProviderCallback']);
//Route::resource('/delete/{id}', 'DeleteController');
Route::get('delete/{id}',[DeleteController::class, 'destroy']);
Route::get('edit/{id}',[DeleteController::class, 'edit']);
Route::post('edit',[DeleteController::class, 'update']);



