<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
