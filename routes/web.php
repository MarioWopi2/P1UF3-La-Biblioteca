<?php

use App\Http\Controllers\BookController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => "books"], function () {
    Route::get(
        '',
        [BookController::class, 'index']
    );
    Route::get(
        '/category/{id}',
        [BookController::class, 'category']
    )->name("books.category");
    Route::get(
        '/create',
        [BookController::class, 'create']
    );
    Route::get(
        '/name',
        [BookController::class, 'searchByName']
    )->name("books.name");
    Route::get(
        '/{id}',
        [BookController::class, 'show']
    );
    Route::post(
        '/books',
        [BookController::class, 'store']
    )->name('books.create');
    Route::get(
        '/{id}/edit',
        [BookController::class, 'edit']
    );
    Route::put(
        '/{id}',
        [BookController::class, 'update']
    )->name('books.edit');
    Route::delete(
        '/{id}',
        [BookController::class, 'destroy']
    )->name("books.delete");
});
