<?php

use App\Http\Controllers\CRUD\Category\CategoryController;
use App\Http\Controllers\CRUD\Order\OrderController;
use App\Http\Controllers\CRUD\Product\ProductController;
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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Route::resource("categories", CategoryController::class);
Route::resource("products", ProductController::class);
Route::resource("orders", OrderController::class);
