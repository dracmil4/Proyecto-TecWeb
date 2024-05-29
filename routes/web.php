<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Redirect;

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

Route::get('producto/index', [ProductoController::class, 'index']);
Route::get('producto/create', [ProductoController::class, 'create']);
Route::post('producto/create', [ProductoController::class, 'store']);
Route::get('producto/edit/{id}', [ProductoController::class, 'edit']);
Route::post('producto/update/{id}', [ProductoController::class, 'update']);
Route::post('producto/destroy/{id}', [ProductoController::class, 'destroy']);


Route::get('/', function () {return view('welcome');});



/**
 * DEMOSTRACION DE FRAGMENTOS
 */

Route::get('demo/saludo', [DemoController::class, 'saludo']);