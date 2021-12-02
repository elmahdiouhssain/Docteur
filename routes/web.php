<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Models\User;


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
Auth::routes();

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashController::class, 'DashIndex'])->name('dash.index');
    Route::get('/profile', [DashController::class, 'DashIndex'])->name('dash.profile');
    Route::get('/consultation', [DashController::class, 'Consultaions'])->name('dash.consultation');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


