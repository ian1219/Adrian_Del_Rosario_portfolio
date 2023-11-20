<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::get('/projects', [IndexController::class, 'projects'])->name('projects');

Route::get('/capstone', [IndexController::class, 'capstone'])->name('capstone');

Route::get('/apparel', [IndexController::class, 'apparel'])->name('apparel');

Route::get('/kaizen', [IndexController::class, 'kaizen'])->name('kaizen');

Route::get('/mdrrmc', [IndexController::class, 'macasadia'])->name('macasadia');

Route::get('/contact', [IndexController::class, 'contact'])->name('contact');