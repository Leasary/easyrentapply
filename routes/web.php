<?php

use App\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', 'RentalController@index')->name('home');
Route::get('/create', 'RentalController@create')->name('create');
Route::post('/create', 'RentalController@postCreate')->name('postCreate');
Route::get('/manage/{rental}/{password}', 'RentalController@manage')->name('manage');
Route::get('/view/{rental}/{application}/{password}', 'RentalController@view')->name('view');
Route::get('/apply/{rental:slug}', 'RentalController@apply')->name('apply');
Route::post('/apply/{rental:slug}', 'RentalController@postApply')->name('postApply');
Route::get('/thanks', 'RentalController@thanks')->name('thanks');
