<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
//  создаем новый маршрут 
// Route - статический доступ к методу get класса Route
// 1 аргумент - маршрут - адрес 
// 2 аргумент - оброботчик - функция, которая возвращает что-то как ответ на наш запрос
// MainController - class, дальше метод класса

Route::get('/index', function () {
    return view('index');
})->name('indexHTML');

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
// именные отслеживания url адресов ->name('feedback')
// обращаемся в html шаблонах не по ur адресам, а по названию различных url адрессов - contact-form

// Route::post('/feedback/commentForm', function (Request $request) {
//     // return "okay";
//     // return $request::all();
//     dd($request::all()); // отображаем данные в формате json
//     // return 'name' from input
// })->name('contact-form');

// Route::post('/feedback/commentForm', function () {
//     return "okay";
// });

// call function from controller
// когда будем переходить по url /feedback/commentForm и передавать данные с помощью метода post
// то будет вызываться MainController и обращаемся к функции feedback 
// Route::post('/feedback/commentForm', 'App\Http\Controllers\MainController@feedback')->name('contact-form');

Route::post('/index', [MainController::class, 'feedback'])->name('contact-form');