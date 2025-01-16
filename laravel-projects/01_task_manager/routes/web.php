<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// redirect  to page that show all the tasks
Route::get('/', function () {
    return redirect()->route('tasks.index');
});


// show all the tasks
Route::get('/tasks', function () {
    $tasks = \App\Models\Task::all();
    return view('index', ['tasks' => $tasks]);
})->name('tasks.index');


// show the form of create
Route::view('/tasks/create', 'create');

// showing the specific task
Route::get('/tasks/{task}', function (Task $task) {

    return view('show', ['task' => $task]);
})->name('tasks.show');


//storing the new task into the database
Route::post('/tasks', function (TaskRequest $request) {
    $task = Task::create($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id]);
})->name('tasks.store');


// show the edit form
Route::view('/tasks/edit', 'create');


// updating using the data that come from the edit form
Route::put('/tasks/{task}', function (TaskRequest $request, Task $task) {
    // updated
    $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' => $task->id]);

})->name('tasks.update');


Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
})->name('tasks.destroy');
