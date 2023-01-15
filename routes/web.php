<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

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

Route::get('/', [ResultController::class, 'index'])->name('result.index');
Route::get('/show-all', [ResultController::class, 'showAll'])->name('result.show-all');
Route::get('/show-all-with-pagination', [ResultController::class, 'showAllWithPagination'])->name('result.show-all-with-pagination');
Route::get('/export-to-excel', [ResultController::class, 'exportToExcel'])->name('result.export-to-excel');
