<?php

use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/admin/clients', [ClienteController::class, 'create']);
Route::post('/admin/clients', [ClienteController::class, 'store'])->name('client.store');
