<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UkmController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard-mhs', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('/ukm', [MahasiswaController::class, 'viewUkm'])->name('mahasiswa.ukm');
    Route::get('/event', [MahasiswaController::class, 'viewEvent'])->name('mahasiswa.event');




    Route::get('/logout', [LogoutController::class, 'logout']);
});

Route::get('/', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/login-mahasiswa', [LoginController::class, 'loginMahasiswa']);
Route::any('/sign-in', [LoginController::class, 'authenticate']);

Route::get('/register-mahasiswa', [RegisterController::class, 'create']);
Route::post('/create-user', [RegisterController::class, 'store']);

Route::get('/login-ukm', [UkmController::class, 'loginUkm']);

Route::get('/register-ukm', [UkmController::class, 'registUkm']);
Route::post('/create-ukm', [UkmController::class, 'createUkm']);
Route::any('/signin-ukm', [UkmController::class, 'authUkm']);
Route::get('/signout', [UkmController::class, 'signout']);

Route::get('/dashboard-ukm', [UkmController::class, 'dashboardUkm'])->name('ukm.dashboard');

Route::get('/edit-ukm', [UkmController::class, 'editUkm'])->name('ukm.edit');
Route::post('/update-ukm', [UkmController::class, 'updateUkm']);

Route::get('/upload-proposal', [EventController::class, 'proposalForm'])->name('ukm.upload-proposal');
Route::get('/daftar-pendaftar', [UkmController::class, 'viewDaftarPendaftar'])->name('ukm.daftar-pendaftar');

Route::get('/history', [EventController::class, 'viewHistory'])->name('ukm.history');
Route::post('/submit-proposal', [EventController::class, 'submitProposal']);
