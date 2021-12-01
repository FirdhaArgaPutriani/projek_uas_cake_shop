<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pesan/{id}', [App\Http\Controllers\PesananController::class, 'index']);
Route::post('pesan/{id}', [App\Http\Controllers\PesananController::class, 'pesan']);
Route::get('/check-out', [App\Http\Controllers\PesananController::class, 'check_out']);
Route::delete('/check-out/{id}', [App\Http\Controllers\PesananController::class, 'delete']);

Route::get('/konfirmasi-check-out', [App\Http\Controllers\PesananController::class, 'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update']);

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('/history/{id}', [App\Http\Controllers\ProfileController::class, 'detail']);
