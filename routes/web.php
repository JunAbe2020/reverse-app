<?php

use Illuminate\Support\Facades\Route;
use livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

Volt::route('/reverse/{word}', 'reverse');
