<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = \App\Models\Task::all();
    return view('index', ['tasks' => $tasks]);
})->name('tasks.index');


Route::view('/tasks/create', 'create');

Route::get('/tasks/{id}', function ($id) {
    $task = \App\Models\Task::findOrFail($id);


    return view('show', ['task' => $task]);
})->name('tasks.show');


Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('tasks.store');
