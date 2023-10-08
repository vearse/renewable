<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/energy-calculator', 'HomeController@energyCalculator')->name('rnrrgy_calculator');
