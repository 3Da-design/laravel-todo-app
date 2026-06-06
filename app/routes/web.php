<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('todo', 'App\\Controllers\TodoController');
Route::put('todo/done/{todo}', [App\Http\Controllers\TaskController::class, 'done'])->name('todo.done');
Route::put('todo/undone/{todo}', [App\Http\Controllers\TaskController::class, 'undone'])->name('todo.undone');
