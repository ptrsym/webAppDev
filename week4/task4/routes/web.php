<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('greetingForm');
});

Route::post('greeting', function () {
    $name = request("name");
    $age = request("age");
    return view('greeting')->with('name', $name)->with('age', $age);
});
