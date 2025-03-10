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
    Route::get('/article/{slug}', [App\Http\Controllers\landing\ArticleController::class, 'show'])->name('news.show');
});

Route::get('/strukturOrganisasi', function () {
    $data = [
        'pageTitle' => 'List Artikel',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Struktur Organisasi', 'url' => null],
        ],
    ];
    return view('landing.struktur', $data);
});

Route::get('/tugasFungsi', function () {
    $data = [
        'pageTitle' => 'Tugas dan Fungsi',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Tugas dan Fungsi', 'url' => null],
        ],
    ];
    return view('landing.tugas-fungsi', $data);
});

Route::get('/visiMisi', function () {
    $data = [
        'pageTitle' => 'Visi dan Misi',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Visi dan Misi', 'url' => null],
        ],
    ];
    return view('landing.visi-misi', $data);
});

Route::get('/layanan', function () {
    $data = [
        'pageTitle' => 'Layanan',
        'breadcrumb' => [
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Layanan', 'url' => null],
        ],
    ];
    return view('landing.layanan', $data);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::post('/logout', function () {
    Illuminate\Support\Facades\Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/news/create', [App\Http\Controllers\admin\NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news/store', [App\Http\Controllers\admin\NewsController::class, 'store'])->name('news.store');
    Route::get('/admin/newsList', [App\Http\Controllers\admin\NewsController::class, 'list'])->name('news.list');
    Route::get('/admin/newsList/edit/{id}', [App\Http\Controllers\admin\NewsController::class, 'edit'])->name('news.edit');
    Route::put('/admin/newsList/update/{id}', [App\Http\Controllers\admin\NewsController::class, 'update'])->name('news.update');
    Route::delete('/admin/newsList/destroy/{id}', [App\Http\Controllers\admin\NewsController::class, 'destroy'])->name('news.destroy');
    Route::get('/admin/news/check-slug', [App\Http\Controllers\Admin\NewsController::class, 'checkSlug'])->name('news.checkSlug');
});

Route::get('/admin/news/get-slugs', function () {
    return response()->json(App\Models\News::pluck('slug')->toArray());
});
