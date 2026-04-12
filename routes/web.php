<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\RolController;

App::setLocale('es');

/*
|--------------------------------------------------------------------------
| HOME (PÚBLICO)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    // LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


/*
|--------------------------------------------------------------------------
| PANEL ADMIN (PROTEGIDO)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // MÓDULO: USUARIOS (Sintaxis compatible)
    Route::prefix('usuarios')->group(function () {
        Route::get('/', [UsuarioController::class, 'index'])->name('admin.users.index');
        Route::get('/crear', [UsuarioController::class, 'create'])->name('admin.users.create');
        Route::post('/guardar', [UsuarioController::class, 'store'])->name('admin.users.store');
        Route::get('/{user}/editar', [UsuarioController::class, 'edit'])->name('admin.users.edit');
        Route::put('/{user}/actualizar', [UsuarioController::class, 'update'])->name('admin.users.update');
        Route::delete('/{user}/eliminar', [UsuarioController::class, 'destroy'])->name('admin.users.destroy');
    });

    // MÓDULO: ROLES
    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/crear', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/guardar', [RolController::class, 'store'])->name('admin.roles.store');
    });
});