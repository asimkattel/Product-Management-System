<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[IndexController::class,"index"]);

Route::get('/add_project', [ProductController::class, "view"]);
Route::post('/add_project', [ProductController::class, "store"]);

Route::get('/edit_project/{id}', [ProductController::class, "edit"]);
Route::post('/edit_project/{id}', [ProductController::class, "editstore"]);

Route::get('/delete_project/{id}',[ProductController::class, "destroy"]);

Route::get('/add_employee', [EmployeeController::class, "view"]);
Route::post('/add_employee', [EmployeeController::class, "store"]);
