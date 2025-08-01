<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PesertaController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.submit');

Route::get('/registration-success', [RegistrationController::class, 'registrationSuccess'])->name('registration.success');
Route::middleware(['auth'])->group(function () {
    // Peserta routes
    Route::get('peserta', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('peserta/{id}', [PesertaController::class, 'show'])->name('peserta.show');
    Route::get('peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
    // Route::post('peserta', [PesertaController::class, 'store'])->name('peserta.store');
    Route::get('peserta/{id}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::post('peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');

    // User CRUD routes
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});
// Front routes
// Route::get('/front', [FrontController::class, 'index'])->name('front.index');
Route::get('/front/service-details', [FrontController::class, 'serviceDetails'])->name('front.service-details');
