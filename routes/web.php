<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/* WEB */
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\SubscriptionController;
use App\Http\Controllers\App\BlogController;
use App\Http\Controllers\App\ServiceController;

/* SISTEMA ADMIN */
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;

App::setLocale('es');

/*
|--------------------------------------------------------------------------
| HOME (PÚBLICO)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacto', [ContactController::class, 'index']);
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');
Route::get('/servicios/{slug}', [ServiceController::class, 'show'])->name('services.show');
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
        Route::get('/', [RolController::class, 'index'])->name('admin.roles.index');
        Route::get('/crear', [RolController::class, 'create'])->name('admin.roles.create');
        Route::post('/guardar', [RolController::class, 'store'])->name('admin.roles.store');
    });

    // MÓDULO: BLOG
    Route::prefix('blogs')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
        Route::post('/guardar', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
        Route::put('/{blog}/actualizar', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
        Route::delete('/{blog}/eliminar', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
    });

    // MÓDULO: SERVICIOS
    Route::prefix('servicios')->group(function () {
        Route::get('/', [AdminServiceController::class, 'index'])->name('admin.servicios.index');
        Route::post('/guardar', [AdminServiceController::class, 'store'])->name('admin.servicios.store');
        Route::put('/{service}/actualizar', [AdminServiceController::class, 'update'])->name('admin.servicios.update');
        Route::delete('/{service}/eliminar', [AdminServiceController::class, 'destroy'])->name('admin.servicios.destroy');
    });
});