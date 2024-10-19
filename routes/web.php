<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginPage'])->middleware('guest')->name('login.index');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterPage'])->middleware('guest')->name('register.index');
Route::post('/register', [AuthController::class, 'registerNewUser'])->middleware('guest')->name('register.post');

Route::middleware('auth')->group(function (){
    Route::resource('users', UserController::class);



    Route::resource('students', StudentController::class)
        ->except(['index', 'show'])
        ->middleware('admin');
    Route::resource('students', StudentController::class)->only(['index', 'show']);

});
