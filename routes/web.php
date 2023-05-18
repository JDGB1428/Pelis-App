<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
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

Route::view('/', 'pages.welcome');

Route::get('/registrar', [RegisterController::class, 'index']) ->name('registrar');
Route::get('/iniciar-sesion',[LoginController::class, 'index'])->name('iniciar-sesion');
Route::post('/registrar', [RegisterController::class, 'store']);
Route::get('/browser', [PostController::class, 'index'])->name('post.index');
