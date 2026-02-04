<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "Ryu", "skill" => 30, "id" => "1"],
        ["name" => "Yoshi", "skill" => 50, "id" => "2"],
        ["name" => "Hattori", "skill" => 70, "id" => "3"]
    ];
    return view('ninjas.index', [
        'greeting' => "hi",
        "ninjas" => $ninjas
    ]);
});


Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});


Route::get('/ninjas/{id}', function ($id) {
    // fetch ninja with id 
    return view('ninjas.show', [
        'id' => $id,
    ]);
});
