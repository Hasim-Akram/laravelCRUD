<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\crudController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [crudController::class, 'show']);
Route::get('/add', [crudController::class, 'add']);
Route::post('/store', [crudController::class, 'store']);
Route::get('/edit/{id}', [crudController::class, 'edit']);
Route::patch('/edit/{id}', [crudController::class, 'update']);
Route::get('/delete/{id}', [crudController::class, 'delete']);
// Route::delete('/delete/{id}', [crudController::class, 'delete']);
