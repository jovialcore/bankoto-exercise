<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// meida controller 

Route::post('/media', [MediaController::class, 'store'])->name('media.store');
Route::get('/media', [MediaController::class, 'create'])->name('media.create');
Route::get('/media/show/{media}', [MediaController::class, 'show'])->name('media.show');

// products controller 

Route::get('/product/list', [ProductController::class, 'index'])->name('product.index');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
