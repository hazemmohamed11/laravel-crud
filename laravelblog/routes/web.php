<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Select2SearchController;

Route::resource('posts', PostController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::get('books/{uuid}/download', [BookController::class, 'download'])->name('books.download');


Route::get('/', [EmployeeController::class, 'showEmployees']);

Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);


Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');


Route::get('/search', [Select2SearchController::class, 'index']);
Route::get('/ajax-autocomplete-search', [Select2SearchController::class, 'selectSearch']);