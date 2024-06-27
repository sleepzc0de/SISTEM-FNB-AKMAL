<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboardkasir;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\makananController;

use App\Http\Controllers\minumanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MakananUserController;
use App\Http\Controllers\MinumanUserController;
use App\Http\Controllers\CategoryUserController;

Route::get('/',[HomeController::class,'home'])->middleware('guest');
Route::get('/makanan',[makananController::class,'makanan'])->middleware('guest');
Route::get('/minuman',[minumanController::class, 'minuman'])->middleware('guest');
Route::get('/category',[CategoryController::class, 'category'])->middleware('guest');

Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register',[RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/user', [HomeUserController::class, 'home'])->middleware('auth');
Route::get('/user/makanan', [MakananUserController::class, 'makanan'])->middleware('auth');
Route::get('/user/minuman', [MinumanUserController::class, 'minuman'])->middleware('auth');
Route::get('/user/category', [CategoryUserController::class, 'category'])->middleware('auth');

// Route::resource('order', OrderController::class);

Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');


// Route::resource('order', OrderController::class);

// Route::post('/order/add', [OrderController::class, 'addToOrder'])->name('order.add');
// Route::get('/order', [OrderController::class, 'showOrder'])->name('order.show');
// Route::post('/order/confirm', [OrderController::class, 'confirmOrder'])->name('order.confirm');
// Route::post('/order/update', [OrderController::class, 'updateOrderDetail'])->name('order.update');


Route::get('/kasir', [Dashboardkasir::class, 'index']);