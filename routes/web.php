<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('etats', 'etatsController');
Route::resource('fonctions', 'fonctionsController');
Route::resource('lieus', 'lieusController');
Route::resource('reclamations', 'reclamationsController');
Route::resource('roles', 'rolessController');
Route::resource('specialites', 'specialitesController');
