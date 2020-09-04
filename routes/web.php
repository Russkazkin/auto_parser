<?php

use App\Http\Controllers\ParserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('parser/', [ParserController::class, 'index'])->name('parse.index');
Route::get('parser/manufacturers', [ParserController::class, 'manufacturers'])->name('parse.categories');
Route::get('parser/cars', [ParserController::class, 'cars'])->name('parse.cars');
