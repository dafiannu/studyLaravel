<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/profile/{id}', function($id) {
    return ('halo  '.$id);
});

Route::get('/landpage', function() {
    return view('landpage');
});

Route::get('/admin', function() {
    return view('master');
});

Route::get('/mproject', function() {
    return view('mproject');
});

Route::get('/mservice', function() {
    return view('mservice');
});