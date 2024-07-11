<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('TESTT');

Route::get('/tes', function () {
    return view('tes');

});
