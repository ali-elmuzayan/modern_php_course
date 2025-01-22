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
    $tasks = Task::latest()->paginate(3);
    return view('index', ['tasks' => $tasks]);
})->name('tasks.index');


// show the form of create
Route::view('/tasks/create', 'form')->name('tasks.create');

// showing the specific task
Route::get('/tasks/{task}', function (Task $task) {

    return view('show', ['task' => $task]);
})->name('tasks.show');


//storing the new task into the database
Route::post('/tasks', function (TaskRequest $request) {
    $task = Task::create($request->validated());
    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task created!');
})->name('tasks.store');


// show the edit form
Route::get('/tasks/{task}/edit', function (Task $task) {

    return view('form', ['task' => $task]);
})->name('tasks.edit');


// updating using the data that come from the edit form
Route::put('/tasks/{task}', function (TaskRequest $request, Task $task) {
    // updated
    $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully!');

})->name('tasks.update');


Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
})->name('tasks.destroy');


//toggling
Route::put('tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggleCompleted();
    return redirect()->back()->with('success', 'Task completed successfully');
})->name('tasks.toggle-complete');
