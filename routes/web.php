<?php

use App\Http\Controllers\Court_TypeController;
use App\Http\Controllers\CourtController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function() {
//     return view('home');
// });

// Route::get('/profile/{id}', function($id) {
//     return ('halo  '.$id);
// });

// Route::get('/landpage', function() {
//     return view('landpage');
// });

// Route::get('/admin', function() {
//     return view('master');
// });

// Route::get('/mproject', function() {
//     return view('mproject');
// });

// Route::get('/mservice', function() {
//     return view('mservice');
// });

Route:: get('/court-type', [Court_TypeController::class, 'index']);
Route:: post('/court-type', [Court_TypeController::class, 'store']);

Route:: resource('/court', CourtController::class);

?>