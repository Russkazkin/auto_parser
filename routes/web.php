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

Auth::routes([
    'register' => false,
    'verify' => true,
    'reset' => false
]);

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'middleware' => ['auth', 'verified'],
], function (){
    Route::get('parser/', [ParserController::class, 'index'])->name('parse.index');
    Route::get('parser/manufacturers', [ParserController::class, 'manufacturers'])->name('parse.categories');
    Route::get('parser/cars', [ParserController::class, 'cars'])->name('parse.cars');
});

Route::get('/home', 'HomeController@index')->name('home');
