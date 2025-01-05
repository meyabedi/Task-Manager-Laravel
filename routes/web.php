<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = Task::all();
    return view('tasks', ['tasks' => $tasks]);
});

Route::post('/tasks', function (Request $request) {
    $request->validate([
        'title' => 'required|max:255',
    ]);

    Task::create([
        'title' => $request->title,
    ]);

    return redirect('/');
});

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect('/');
});
