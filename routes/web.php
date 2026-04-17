<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/* WEB */
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\ContactController;
use App\Http\Controllers\App\SubscriptionController;
use App\Http\Controllers\App\BlogController;
use App\Http\Controllers\App\ServiceController;
use App\Http\Controllers\App\PortafolioController;

/* SISTEMA ADMIN */
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\PortafolioController as AdminPortafolioController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

App::setLocale('es');

/*
|--------------------------------------------------------------------------
| HOME (PÚBLICO)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacto', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/servicios', [ServiceController::class, 'index'])->name('services.index');
Route::get('/servicios/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/mantenimiento', function () {return view('pages.errors.mantenimiento');})->name('mantenimiento');
Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio.index');
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
        Route::post('/guardar', [RolController::class, 'store'])->name('admin.roles.store');
        Route::put('/{id}/actualizar', [RolController::class, 'update'])->name('admin.roles.update');
        Route::delete('/{id}/eliminar', [RolController::class, 'destroy'])->name('admin.roles.destroy');
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

    // MÓDULO: PORTAFOLIO
    Route::prefix('portafolios')->group(function () {
        Route::get('/', [AdminPortafolioController::class, 'index'])->name('admin.portafolios.index');
        Route::post('/guardar', [AdminPortafolioController::class, 'store'])->name('admin.portafolios.store');
        Route::put('/{id}/actualizar', [AdminPortafolioController::class, 'update'])->name('admin.portafolios.update');
        Route::delete('/{id}/eliminar', [AdminPortafolioController::class, 'destroy'])->name('admin.portafolios.destroy');
    });

    Route::prefix('contacts')->group(function () {
        Route::get('/', [AdminContactController::class, 'index'])->name('admin.contacts.index');
        Route::post('/', [AdminContactController::class, 'store'])->name('admin.contacts.store');
        Route::put('/{id}/status', [AdminContactController::class, 'changeStatus'])->name('admin.contacts.changeStatus');
        Route::post('/{id}/seguimiento', [AdminContactController::class, 'storeSeguimiento'])->name('admin.contacts.seguimiento.store');
        Route::put('/{id}', [AdminContactController::class, 'update'])->name('admin.contacts.update');
    });

});