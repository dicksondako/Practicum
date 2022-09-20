<?php

use App\Http\Controllers\FoodOrderController;
use App\Http\Controllers\KekeOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/order_keke', [KekeOrderController::class, 'index'])->name('order_keke');

Route::get('/order_food', [FoodOrderController::class, 'index'])->name('order_food');

