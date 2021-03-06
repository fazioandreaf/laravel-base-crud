<?php

use App\Http\Controllers\controller_db;
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
Route::get('/pages/home','controller_db@home')->name('home');
Route::get('/ospite/{id}','controller_db@ospite_description')->name('ospite_description');
Route::get('/form','controller_db@form_page')->name('form_page');
Route::post('/ospite','controller_db@insert_date')->name('insert_date');
