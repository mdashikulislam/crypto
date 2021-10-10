<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('inscription', [\App\Http\Controllers\HomeController::class,'inscription'])->name('inscription');
Route::post('contest',[\App\Http\Controllers\HomeController::class,'contest'])->name('contest');
Route::get('winner',[\App\Http\Controllers\HomeController::class,'result'])->name('result');
Route::get('valider',[\App\Http\Controllers\HomeController::class,'valider'])->name('valider');
Route::get('rdv',[\App\Http\Controllers\HomeController::class,'rdv'])->name('rdv');
