<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// frontend
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// admin route
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

