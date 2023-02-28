<?php

use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('home');
});

Route::get('produtos', function () {
    return view('produtos');
});

Route::get('empresa', function () {
    return view('empresa');
});

Route::get('contato', function () {
    return view('contato');
});
