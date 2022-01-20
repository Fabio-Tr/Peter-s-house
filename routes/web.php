<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/appartments', [PublicController::class, 'appartments'])->name('appartments');
Route::get('/where', [PublicController::class, 'where'])->name('where');
Route::get('/merchandising', [PublicController::class, 'merchandising'])->name('merchandising');
Route::get('/what', [PublicController::class, 'what'])->name('what');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
