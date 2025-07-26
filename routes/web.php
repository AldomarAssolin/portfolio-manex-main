<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Public\ErrorController;

// Rotas protegidas do admin

//Route::middleware(['web', 'auth', 'is_admin']) -> solucionar 'is_admin' middleware.


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
    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
});

// Skills
Route::middleware(['web', 'auth'])
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
});


// Rota pública para erro
Route::get('/unauthorized', [ErrorController::class, 'unauthorized'])->name('unauthorized');

// Public routes
// Rotas públicas
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('public.pages.about');
})->name('about');

Route::get('/projects', function () {
    return view('public.pages.projects');
})->name('projects');

Route::get('/blog', function () {
    return view('public.pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('public.pages.contact');
})->name('contact');


// login routes
Auth::routes(['register' => false]);
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');


// teste
Route::get('/teste-middleware', function () {
    return 'Acesso liberado!';
})->middleware('IsAdmin');