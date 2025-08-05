<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Public\ErrorController;
use App\Http\Controllers\Public\ProjectsController as PublicProjectController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Public\PostsController as PublicPostsController;
use App\Http\Controllers\Admin\SettingsController;

/*

Route::middleware(['web', 'auth', 'is_admin']) -> solucionar 'is_admin' middleware.

*/

/* 
*********************************************************
 Rotas protegidas do admin
********************************************* 
*/
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

// Projetos
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('projects', ProjectController::class);
    });

// Rota para gerenciar posts
Route::middleware(['web', 'auth'])
->prefix('admin')
->name('admin.')
->group(function () {
    Route::resource('posts', PostController::class);
});

// Rota para gerenciar configurações
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('settings', SettingsController::class, );
    });


// profile
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    });

// Contacts
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
    });

// Skills
Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
    });

/* 
*********************************************************
 Rota pública para erro
********************************************* 
*/
Route::get('/unauthorized', [ErrorController::class, 'unauthorized'])->name('unauthorized');

/* *********************************************************
 Public routes
********************************************* 
*/

Route::get('/', function () {
    return view('public.home');
})->name('home');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('public.pages.about');
})->name('about');


// Página com todos os projetos
Route::get('/projects', [PublicProjectController::class, 'index'])->name('projects');

// Página de projeto individual
Route::get('/projects/{project}', [PublicProjectController::class, 'show'])->name('public.projects.show');

// Blog routes
Route::get('/blog', [PublicPostsController::class, 'index'])->name('public.blog.index');
Route::get('/blog/{post:slug}', [PublicPostsController::class, 'show'])->name('public.blog.show');


Route::get('/contact', function () {
    return view('public.pages.contact');
})->name('contact');


// Authentication routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Auth::routes(['register' => false]);

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');


// teste
Route::get('/teste-middleware', function () {
    return 'Acesso liberado!';
})->middleware('IsAdmin');

Auth::routes();


