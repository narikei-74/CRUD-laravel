<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UpdateController;

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

Route::get('/', [IndexController::class, 'view'])->name('index_view');
Route::post('/create', [IndexController::class, 'create'])->name('index_create');
Route::delete('/{post}/delete', [IndexController::class, 'delete'])->name('index_delete');

Route::get('/show/{post}', [ShowController::class, 'view'])->name('show_view');

Route::get('/update/{post}', [UpdateController::class, 'view'])->name('update_view');
Route::patch('/update/{post}/update', [UpdateController::class, 'update'])->name('update_update');
