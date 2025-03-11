<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});



//Route::resource('todo', TodoController::class);

Route::get('/todo', TodoController::class . '@index')->name('todo.index');
Route::get('/todo/create', TodoController::class.'@create')->name('todo.create');
Route::post('/todo/create', TodoController::class.'@store')->name('todo.store');
Route::get('/todo/{id}', TodoController::class.'@edit')->name('todo.edit');
Route::post('/todo/{id}', TodoController::class.'@update')->name('todo.update');
Route::delete('/todo', TodoController::class.'@destroy')->name('todo.destroy');
