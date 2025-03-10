<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {return view('welcome');});
Route::get('/why', function () {return view('why');});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);


Route::get('/diary', [DiaryController::class, 'index']);
Route::get('/diary/create', [DiaryController::class, 'create']);
Route::post('/diary', [DiaryController::class, 'store']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
