<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\TransactionController;

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

Route::get('pesan/{id}', [PesanController::class, 'index']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);

Route::get('/check-out', [PesanController::class, 'check_out']);
Route::delete('/check-out/{id}', [PesanController::class, 'delete']);

Route::get('/konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::resource('profile', ProfileController::class);
Route::post('/profile', [ProfileController::class, 'update']);

Route::get('history', [HistoryController::class, 'index']);
Route::get('/history/{id}', [HistoryController::class, 'detail']);

Route::resource('products', ProductController::class);

Route::resource('ContactUs', ContactUsController::class);

Route::resource('users', UserController::class);

Route::resource('cakes', CakeController::class);

Route::resource('transactions', TransactionController::class);