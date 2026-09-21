<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $role = auth()->user()->role_id;
    if ($role == 1) {
        return view('Admin.dashboard');
    } elseif ($role == 2) {
        return view('Vendedor.dashboard');
    } else {
        return view('Cliente.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/./auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/formusuarios', [UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/formusuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::get('/listausuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

});
