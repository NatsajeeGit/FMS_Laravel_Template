<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.index');
})->name('app.index');

Route::get('/table', function () {
    return view('app.table');
})->name('app.table');

Route::get('/form', function () {
    return view('app.form');
})->name('app.form');
