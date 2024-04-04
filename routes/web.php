<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AlbumController::class)->group(function () {
    Route::get('/albuns', 'index')->name('albuns.index');
    Route::get('/albuns/create', 'create')->name('albuns.create');
    Route::post('/albuns', 'store')->name('albuns.store');
    Route::get('/albuns/{album}/edit', 'edit')->name('albuns.edit');
    Route::put('/albuns/{album}', 'update')->name('albuns.update');
    Route::delete('/albuns/{album}', 'destroy')->name('albuns.destroy');
});
