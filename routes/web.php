<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialElectricoController;
use App\Http\Controllers\TransaccionInventarioController;

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

Route::get('/', [MaterialElectricoController::class, 'index'])->name('home');
Route::post('/register/material', [MaterialElectricoController::class, 'store'])->name('post-material');
Route::post('/edit/material/{id}', [MaterialElectricoController::class, 'edit'])->name('edit-material');
Route::post('/delete/material/{id}', [MaterialElectricoController::class, 'delete'])->name('delete-material');

Route::get('/transactions', [TransaccionInventarioController::class, 'index'])->name('transactions');
Route::post('/register/transaction', [TransaccionInventarioController::class, 'store'])->name('transaction-material');
