<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CanChangeContributer;
use App\Http\Middleware\CheckAccessToNewMember;
use App\Http\Controllers\ContributersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contributers', 'App\Http\Controllers\ContributersController@index');
Route::get('/contributers/{id}', 'App\Http\Controllers\ContributersController@show')->middleware(CanChangeContributer::class);
Route::put('/contributers/{id}', 'App\Http\Controllers\ContributersController@update')->middleware(CanChangeContributer::class);

Route::get('/links', 'App\Http\Controllers\LinkController@index');
Route::put('/links/{id}', 'App\Http\Controllers\LinkController@update')->name('links.update');
Route::post('/form', 'App\Http\Controllers\LinkController@store');
Route::delete('/links/{id}', 'App\Http\Controllers\LinkController@destroy')->name('links.destroy');

Route::get('/new-member', 'App\Http\Controllers\NewMemberController@index')->middleware(CheckAccessToNewMember::class);
Route::post('/new-member', 'App\Http\Controllers\NewMemberController@create')->middleware(CheckAccessToNewMember::class);
Route::delete('/new-member/{id}', 'App\Http\Controllers\NewMemberController@destroy')->name('new-member.destroy')->middleware(CanChangeContributer::class);

Route::get('/form', function () {
    return view('link_form');
});

Route::get('/gg', function () {
    return view('auth.app');
});

Route::get('/test1', 'App\Http\Controllers\TestController@show');

Route::get('/welcome2', function () {
    return view('welcome2');
});

Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
