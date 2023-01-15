<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
Route::get('/', [PageController::class, 'index_home'])->name('index_home');
Route::get('/cart', [PageController::class, 'index_cart'])->name('index_cart')->middleware('isGuest');
Route::get('/accountDetail', [UserController::class, 'index_accountDetail'])->name('index_account');
Route::get('/auth/login', [UserController::class, 'index_login'])->name('index_login');
Route::get('/auth/register', [UserController::class, 'index_register'])->name('index_register');
Route::get('/product/view/{id}', [ProductController::class, 'view_product'])->name('view_product');
Route::get('/product/index', [ProductController::class, 'index_product'])->name('index_product');
Route::get('/product/create', [ProductController::class, 'create_product'])->name('create_product');
Route::get('/product/edit/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::patch('/product/edit/{id}', [ProductController::class, 'update_product'])->name('update_product');
Route::post('/auth/login', [UserController::class, 'login'])->name('login');
Route::post('/auth/register', [UserController::class, 'register'])->name('register');
Route::post('/auth/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');
Route::post('product/create', [ProductController::class, 'store_product'])->name('store_product');
Route::delete('/product/delete/{id}', [ProductController::class, 'delete_product'])->name('delete_product');



