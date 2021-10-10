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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('landing');
Route::get('inscription', [\App\Http\Controllers\HomeController::class,'inscription'])->name('inscription');
Route::post('contest',[\App\Http\Controllers\HomeController::class,'contest']);
Route::get('contest',[\App\Http\Controllers\HomeController::class,'getContest'])->name('contest');
Route::get('winner',[\App\Http\Controllers\HomeController::class,'result'])->name('result');
Route::get('valider',[\App\Http\Controllers\HomeController::class,'valider'])->name('valider');
Route::get('rdv',[\App\Http\Controllers\HomeController::class,'rdv'])->name('rdv');
Route::get('vip',[\App\Http\Controllers\HomeController::class,'vip'])->name('vip');
Route::get('signc',[\App\Http\Controllers\HomeController::class,'signup'])->name('signup');
Route::get('login',[\App\Http\Controllers\HomeController::class,'login'])->name('login');
Route::get('login2',[\App\Http\Controllers\HomeController::class,'login2'])->name('login2');
Route::get('deblok',[\App\Http\Controllers\HomeController::class,'deblok'])->name('deblok');
Route::post('deblok',[\App\Http\Controllers\HomeController::class,'deblokSave']);
Route::post('contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::get('command',function (){

});
