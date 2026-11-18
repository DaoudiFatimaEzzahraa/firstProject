<?php

use Illuminate\Support\Facades\Route;



Route::get('/tasks', function () {
    return view('create');
});

route::resource('tasks', \App\Http\Controllers\TaskController::class);