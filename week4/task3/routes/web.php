<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('task3')->with('get', request()->all());
});
