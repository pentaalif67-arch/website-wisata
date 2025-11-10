<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/destinasi', function () {
    return view('dashboard.destinasi');
});

