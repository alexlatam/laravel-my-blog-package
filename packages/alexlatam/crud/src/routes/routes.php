<?php

use Illuminate\Support\Facades\Route;

use Alexlatam\Crud\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/crud/tasks',                [TasksController::class, 'index']);
Route::get('/crud/tasks/{id}',           [TasksController::class, 'show']);
Route::get('/crud/tasks/create',         [TasksController::class, 'create']);
Route::post('/crud/tasks/store',         [TasksController::class, 'store']);
Route::get('/crud/tasks/edit/{id}',      [TasksController::class, 'edit']);
Route::put('/crud/tasks/update',         [TasksController::class, 'update']);
Route::delete('/crud/tasks/delete/{id}', [TasksController::class, 'delete']);
