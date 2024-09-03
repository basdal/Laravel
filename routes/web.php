<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/otherpage', function () {
    return view('otherpage');
});
Route::get('/inlog', function () {
    return view('inlog');
});
Route::get('/inlog', [InlogController::class, 'showinlog'])->name('inlog.show');
Route::post('/inlog', [InlogController::class, 'submitinlog'])->name('inlog.submit');


Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');