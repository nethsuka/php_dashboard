<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContributersController;
use App\Models\Member;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/contributers', 'App\Http\Controllers\ContributersController@index');
Route::post('/contributers', 'App\Http\Controllers\ContributersController@post');

Route::get('/contributers/{id}', 'App\Http\Controllers\ContributersController@show');
Route::put('/contributers/{id}', 'App\Http\Controllers\ContributersController@update');

Route::get('/links', 'App\Http\Controllers\LinkController@index');
Route::put('/links/{id}', 'App\Http\Controllers\LinkController@update')->name('links.update');
Route::post('/form', 'App\Http\Controllers\LinkController@store');
Route::delete('/links/{id}', 'App\Http\Controllers\LinkController@destroy')->name('links.destroy');


Route::get('/form', function () {
    return view('link_form');
});

Route::get('/gg', function () {
    return "gggg";
});

Route::get('/test1', 'App\Http\Controllers\TestController@show');

Route::get('/welcome2', function () {
    return view('welcome2');
});