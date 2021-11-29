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

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactsController;

Route::get('/', [ArticlesController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', [ContactsController::class, 'create'])->name('contacts.create');

Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts');

Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');

Route::post('/articles', [ArticlesController::class, 'store'])->name('articles');

Route::get('/admin/feedback', [ContactsController::class, 'index'])->name('admin');

Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('articles.show');

