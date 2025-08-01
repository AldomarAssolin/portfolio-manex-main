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
    Route::resource('projects', ProjectController::class);
});

//Route::resource('project', ProjectsController::class );

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


// Rota pública para erro
Route::get('/unauthorized', [ErrorController::class, 'unauthorized'])->name('unauthorized');

// *********************************************************
// Public routes
//********************************************* */

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('public.pages.about');
})->name('about');


// Página com todos os projetos
Route::get('/projects', [PublicProjectController::class, 'index'])->name('projects');

// Página de projeto individual
Route::get('/projects/{project}', [PublicProjectController::class, 'show'])->name('public.projects.show');

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