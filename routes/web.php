<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Movie;

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

Route::get('/',[MovieController::class , 'index'])->name('home');

Route::post('store-form','MovieController@insert');

Route::get('/form','MovieController@show',function () {
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
