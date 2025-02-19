<?php

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

Route::prefix('/')->group(function () {
    Route::get('/', [App\Http\Controllers\landing\ArticleController::class, 'home'])->name('home');
});
 

Route::prefix('article')->group(function () {
    Route::get('/', [App\Http\Controllers\landing\ArticleController::class, 'index'])->name('article');
    Route::get('/{slug}', [App\Http\Controllers\landing\ArticleController::class, 'show'])->name('article.show');
});

Route::get('/strukturOrganisasi', function () {
    $data = [
        'pageTitle' => 'List Artikel',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name'=> 'Struktur Organisasi','url'=> null],
        ],
    ];
    return view('landing.struktur',$data);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.dashboard');
});