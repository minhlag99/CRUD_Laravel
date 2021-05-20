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

Route::get('/', function () {
    return view('welcome');
});
Route::get('employee', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('employee/create', [\App\Http\Controllers\EmployeeController::class, 'create']);
Route::post('employee/create', [\App\Http\Controllers\EmployeeController::class, 'store']);
Route::get('employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit']);
Route::post('employee/update', [\App\Http\Controllers\EmployeeController::class, 'update']);
Route::get('employee/{id}/delete', [\App\Http\Controllers\EmployeeController::class, 'destroy']);