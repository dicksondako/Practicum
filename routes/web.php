<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodOrderController;
use App\Http\Controllers\KekeController;
use App\Http\Controllers\KekeOrderController;
use App\Http\Controllers\MyOrdersController;
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

//Route::get('keke/', [KekeOrderController::class, 'index'])->name('keke.index');

//Route::get('food/', [FoodOrderController::class, 'index'])->name('food.index');

Route::get('foods/', [FoodController::class, 'index'])->name('foods.index');

Route::get('kekes/', [KekeController::class, 'index'])->name('kekes.index');




//Route::put('/edit', [KekeController::class, 'update'])->name('kekeUpdate');

Route::get('/kekes/{id}/create', [KekeController::class, 'create'])->name('kekes.{id}.create');

Route::post('/keke/create', [KekeController::class, 'store'])->name('keke.store');

Route::get('/foods/{id}/create', [FoodController::class, 'create'])->name('foods.{id}.create');

Route::post('/food/create', [FoodController::class, 'store'])->name('food.store');

Route::get('my-order/', [MyOrdersController::class, 'index'])->name('my-order');


