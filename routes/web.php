<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route author start
Route::get('/dashboard-author', function () {
    return view('Author.Dashboard');
});

Route::get('/bookmark-author', function () {
    return view('Author.Bookmark');
});

Route::get('/favorit-author', function () {
    return view('Author.Favorit');
});

Route::get('/history-author', function () {
    return view('Author.History');
});

Route::get('/tulis-author', function () {
    return view('Author.Tulis');
});

Route::get('/addcerita-author', function () {
    return view('Author.Addcerita');
});

Route::get('/tuliscerita-author', function () {
    return view('Author.Tuliscerita');
});

Route::get('/editcerita-author', function () {
    return view('Author.Editcerita');
});
// Route author end


// Route pembaca start
Route::get('/dashboard-pembaca', function () {
    return view('Pembaca.Dashboard');
});

Route::get('/baca-pembaca', function () {
    return view('Pembaca.halamanBaca');
});

Route::get('/bookmark-pembaca', function () {
    return view('Pembaca.Bookmark');
});

Route::get('/favorit-pembaca', function () {
    return view('Pembaca.Favorit');
});

Route::get('/histori-pembaca', function () {
    return view('Pembaca.Histori');
});
// Route pembaca end
