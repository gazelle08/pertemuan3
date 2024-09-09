<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('Home/', function () {
    return view('home');
});

Route::get('Profil_adel/', function () {
    return view('profil_adel');
});

Route::get('Matakuliah/', function () {
    return view('matakuliah');
});