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
Route::get('/arithmetisches-mittel', function () {
    return view('arithmetic');
})->name('arithmetic');
Route::get('/gewichtetes-mittel', function () {
    return view('weight');
})->name('weight');
Route::get('/geometrisches-mittel', function () {
    return view('geometric');
})->name('geometric');
Route::get('/harmonisches-mittel', function () {
    return view('harmonic');
})->name('harmonic');
Route::get('/median', function () {
    return view('median');
})->name('median');
Route::get('/quadratisches-mittel', function () {
    return view('square');
})->name('square');
Route::get('/ubungen-aufgaben', function () {
    return view('tasks');
})->name('tasks');
Route::get('/mittelwert-google-spreadsheet', function () {
    return view('spreadsheet');
})->name('spreadsheet');
Route::get('/mittelwert-ausreisser-werte-ausreisser', function () {
    return view('outliery');
})->name('outliery');
Route::get('/durchschnittswerte-in-statistik', function () {
    return view('statistic');
})->name('statistic');
Route::get('/standardabweichung', function () {
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
