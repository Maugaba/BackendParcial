<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
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

Route::prefix('alumnos')->group(function () {
    Route::get('/getTodos',[ AlumnosController::class, 'get']);
    Route::post('/',[ AlumnosController::class, 'store']);
    Route::get('/{id}',[ AlumnosController::class, 'show']);
    Route::put('/{id}',[ AlumnosController::class, 'update']);
    Route::put('/state/{id}',[ AlumnosController::class, 'state']);
});
