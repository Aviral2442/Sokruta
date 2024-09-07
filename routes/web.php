<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('Home');

Route::view('/about', 'pages.about')->name('About');

Route::view('/service', 'pages.service')->name('Services');
