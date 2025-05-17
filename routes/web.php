<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website-home');
});

Route::get('/admin', function () {
    return view('admin-panel-home');
});
