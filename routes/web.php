<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {return view('welcome');})->middleware("guest");
Route::get('/why', function () {return view('why');})->middleware("guest");

//todo
Route::get('/todos', [ToDoController::class, 'index'])->name("home")->middleware("auth");
Route::get('/todos/create', [ToDoController::class, 'create'])->middleware("auth");
Route::post('/todos', [ToDoController::class, 'store']);
Route::get('/todos/{todo}', [ToDoController::class, 'show'])->middleware("auth");
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
Route::put('/todos/{todo}', [ToDoController::class, 'update']);
Route::delete('/todos/{todo}', [ToDoController::class, 'destroy']);

//diary
Route::get('/diary', [DiaryController::class, 'index'])->middleware("auth");
Route::get('/diary/create', [DiaryController::class, 'create'])->middleware("auth");
Route::post('/diary', [DiaryController::class, 'store']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->middleware("auth");
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
Route::put('/diaries/{diary}', [DiaryController::class, 'update']);
Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);

//auth
Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);

Route::delete('/logout', [SessionController::class, 'destroy']);

Route::get('/login', [SessionController::class, 'create'])->name("login")->middleware("guest");
Route::post('/login', [SessionController::class, 'store']);