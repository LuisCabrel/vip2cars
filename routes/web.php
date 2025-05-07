<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vip2carsController;

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

Route::get('/', [Vip2carsController::class, 'index'])->name('vip2cars.index');
Route::get('/vip2cars/create', [Vip2carsController::class, 'create'])->name('vip2cars.create');
Route::post('/vip2cars', [Vip2carsController::class, 'store'])->name('vip2cars.store');
Route::get('/vip2cars/{id}/edit', [Vip2carsController::class, 'edit'])->name('vip2cars.edit');
Route::put('/vip2cars/{id}', [Vip2carsController::class, 'update'])->name('vip2cars.update');
Route::delete('/vip2cars/{id}', [Vip2carsController::class, 'destroy'])->name('vip2cars.destroy');

