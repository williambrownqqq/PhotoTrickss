<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/contacts', function () {
    return view('contacts');
})->name('contactsHTML');

Route::get('/collabs', function () {
    return view('collabs');
})->name('collabsHTML');
// обработчик url адресса 
Route::get('/gallery', function () {
    return view('gallery');
})->name('galleryHTML'); 
Route::get('/feedback', function () {
    return view('feedback');
})->name('feedbackHTML'); 

Route::get('/index', [MainController::class, 'index'])->name('indexHTML');
Route::post('/index', [MainController::class, 'feedback'])->name('contact-form');
Route::get('/index/preset/{id}', [MainController::class, 'preset']);
