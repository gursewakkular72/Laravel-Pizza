<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [PizzaController::class, 'index']);  // welcome page
Route::get('/allpizzas', [PizzaController::class, 'show'])->middleware('auth'); //shows all the pizza orders
Route::post('/allpizzas', [PizzaController::class, 'store']);  //stores pizza order to the database and redirects user to the welcome page.
Route::get('/allpizzas/{id}', [PizzaController::class, 'details'])->middleware('auth'); // shows a specific order based on the id
Route::delete('/allpizzas/{id}', [PizzaController::class, 'destroy'])->middleware('auth'); // deletes a specific order based on the id
Route::get('/create', [PizzaController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
