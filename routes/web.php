<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PersonsController::class, 'index']);
Route::get('/getall', [App\Http\Controllers\PersonsController::class, 'getAll'])->name('persons.getAll');
Route::delete('/delete', [App\Http\Controllers\PersonsController::class, 'delete'])->name('persons.delete');
Route::post('/store', [App\Http\Controllers\PersonsController::class, 'store'])->name('persons.store');
Route::put('/update', [App\Http\Controllers\PersonsController::class, 'update'])->name('persons.update');
Route::get('/getperson', [App\Http\Controllers\PersonsController::class, 'getPerson'])->name('persons.getPerson');
