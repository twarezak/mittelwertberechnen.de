<?php

use App\Http\Controllers\Contact;
use Illuminate\Http\Response;
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

Route::get('/', function () {
    return view('index');
})->name('home_page');
Route::get('/srednia-arytmetyczna', function () {
    return view('arithmetic');
})->name('arithmetic');
Route::get('/srednia-wazona', function () {
    return view('weight');
})->name('weight');
Route::get('/srednia-geometryczna', function () {
    return view('geometric');
})->name('geometric');
Route::get('/srednia-harmoniczna', function () {
    return view('harmonic');
})->name('harmonic');
Route::get('/mediana', function () {
    return view('median');
})->name('median');
Route::get('/srednia-kwadratowa', function () {
    return view('square');
})->name('square');
Route::get('/cwiczenia-zadania', function () {
    return view('tasks');
})->name('tasks');
Route::get('/srednia-arkusz-google-spreadsheet', function () {
    return view('spreadsheet');
})->name('spreadsheet');
Route::get('/srednie-outliery-wartosci-odstajace', function () {
    return view('outliery');
})->name('outliery');
Route::get('/srednie-w-statystyce', function () {
    return view('statistic');
})->name('statistic');
Route::get('/odchylenie-standardowe', function () {
    return view('standard-deviation');
})->name('standard-deviation');

Route::get('/polityka-prywatnosci-i-ciasteczka', function () {
    return view('cookies');
})->name('cookies');
Route::get('/o-stronie', function () {
    return view('about');
})->name('about');
Route::get('/kontakt', [Contact::class, 'contact'])->name('contact');
Route::post('/kontakt', [Contact::class, 'sendMail'])->name('sendMail');
