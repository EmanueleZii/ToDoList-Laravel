<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
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
Route::get('/tasks', [TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks/store', [TaskController::class,'store'])->name('tasks.store');
Route::get('/tasks/{id}/edit', [TaskController::class,'edit'])->name('tasks.edit');
Route::patch('tasks/update/{id}', [TaskController::class,'update'])->name('tasks.update');
Route::delete('tasks/delete/{id}', [TaskController::class,'destroy'])->name('tasks.destroy');
Route::get('/tasks/completed/{id}',[TaskController::class,'completed'])->name('tasks.completed');
Route::get('/tasks/reset/{id}',[TaskController::class,'reset'])->name('tasks.reset');
Route::get('/', function () {
    return view('welcome');
});
