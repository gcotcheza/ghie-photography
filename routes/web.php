<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about-me', [HomeController::class, 'aboutMe']);

Route::get('/portfolio', [HomeController::class, 'portfolio']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::resource('media', MediaController::class);


// Route::get('/about', [AboutMeController::class, 'index'])->name('about');
// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact');
