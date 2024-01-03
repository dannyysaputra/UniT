<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MahasiswaController;
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

Route::middleware(['auth'])->group(function (){
    Route::get('dashboard-mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
});

Route::get('/', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/login-mahasiswa', [LoginController::class, 'loginMahasiswa']);
Route::any('/login', [LoginController::class, 'authenticate']);

Route::get('/register-mahasiswa', [RegisterController::class, 'create']);
Route::post('/create-user', [RegisterController::class, 'store']);