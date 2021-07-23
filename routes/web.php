<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/training', [MainController::class, 'training'])->name('training');
Route::get('/story', [MainController::class, 'story'])->name('story');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/privacy', [MainController::class, 'privacy'])->name('privacy');
Route::get('/conflict', [MainController::class, 'conflict'])->name('conflict');
