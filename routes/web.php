<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('cv', function () {
    $title = 'Curriculum Vitae';
    return view('page.cv',compact('title'))
    ;
});




// formulir
Route::get('/form', [FeedbackController::class, 'index'])->name('form');
Route::get('/tampildata', [FeedbackController::class, 'show'])->name('tampildata');
Route::post('/tambah', [FeedbackController::class, 'store'])->name('tambah');
