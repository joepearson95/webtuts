<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ShoppingController;
use Laravel\Fortify\Fortify;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/account', [AccountController::class, 'index']);
Route::get('/checkout', [ShoppingController::class, 'index']);
Route::post('/sessionBasket', [ShoppingController::class, 'basketToSession']);

# create middleware
Route::get('/sign-in/github', [AccountController::class, 'github']);
Route::get('/sign-in/github/redirect', [AccountController::class, 'githubRedirect']);
Route::get('/home', [AccountController::class, 'index'])->middleware('auth');
// Below is from the tutorial
// Route::post('/create', [MessageController::class, 'create']);
// Route::get('/message/{id}', [MessageController::class, 'view']);