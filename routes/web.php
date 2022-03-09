<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('auth.login2');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user-profile', [DashboardController::class, 'profile']);


Route::get('/artikel', [ArtikelController::class, 'index']);

Route::get('/user', [UserController::class, 'index'])->name('list');
Route::get('/add_user', [UserController::class, 'create'])->name('add_user');
Route::post('/store_user', [UserController::class, 'store']);
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit_user');
Route::put('/update/{id}', [UserController::class, 'update'])->name('update_siswa');
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy-siswa');
Route::get('/user/{id}', [UserController::class, 'show'])->name('show-user');
