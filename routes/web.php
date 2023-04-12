<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\App;

Auth::routes();

Route::get('/lang/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'si'])) {
        abort(400);
    }
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('changeLang');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([\App\Http\Middleware\Authenticate::class])->group(function () {
    Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('posts/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
});
