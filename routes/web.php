<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController; // Agrega el controlador de registro

Route::get('/', function () {
    return view('welcome');
});

// Rutas para el inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rutas para el registro de usuarios
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para el panel de control o dashboard
Route::get('/dashboard', function () {
    // Lógica para mostrar el panel de control o la página de inicio después de iniciar sesión
    return view('dashboard');
})->middleware('auth')->name('dashboard');
