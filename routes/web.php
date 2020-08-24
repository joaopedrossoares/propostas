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

Route::post('/upload','OfferController@uploadFile')->name('offers.upload');
Route::get('/obtem-documento', 'OffersController@generateLinkToDownload')->name('offers.download');
Route::get('/bairros', 'BairroController@getPlace')->name('places.get');