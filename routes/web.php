<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
//    return view('welcome');
// });

Route::get('/home', [AccountController::class, 'landing_page'])->name('landing.page');
Route::get('/login', [AccountController::class, 'login_page'])->name('login.account');
Route::get('/register', [AccountController::class, 'register_page'])->name('register.account');

Route::get('/success', [AccountController::class, 'success_page'])->name('success.account');
Route::get('/failed', [AccountController::class, 'failed_page'])->name('failed.account');

Route::post('/', [AccountController::class, 'insert_data'])->name('insert_registered.account');
