<?php

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
    return view('welcome');
});

Route::get('generate-shorten-link', 'UrlShortenerController@index');

Route::post('generate-shorten-link', 'UrlShortenerController@store')->name('generate.shorten.link.post');
Route::get('{code}', 'UrlShortenerController@shortenLinks')->name('shorten.link');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
