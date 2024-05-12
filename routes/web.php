<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/link')->name('index');

Route::get('/link', [LinkController::class, 'index'])->name('link.index');
Route::post('/link/new', [LinkController::class, 'new'])->name('link.new');
Route::get("/link/preview", [LinkController::class, 'preview'])->name('link.preview');

Route::get('/{keyword}', [LinkController::class, 'redirect'])->name('link.redirect');
