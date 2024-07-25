<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\NewMemberController;
use App\Http\Middleware\CanChangeContributer;
use App\Http\Middleware\CheckAccessToNewMember;
use App\Http\Controllers\ContributersController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contributers', [ContributersController::class,'index']);
Route::get('/contributers/{id}', [ContributersController::class,'show'])->middleware(CanChangeContributer::class);
Route::put('/contributers/{id}', [ContributersController::class,'update'])->middleware(CanChangeContributer::class);

Route::get('/links', [LinkController::class, 'index']);
Route::put('/links/{id}', [LinkController::class, 'update'])->name('links.update');
Route::post('/form', [LinkController::class, 'store']);
Route::delete('/links/{id}', [LinkController::class, 'destroy'])->name('links.destroy');

Route::get('/new-member', [NewMemberController::class, 'index'])->middleware(CheckAccessToNewMember::class);
Route::post('/new-member', [NewMemberController::class, 'create'])->middleware(CheckAccessToNewMember::class);
Route::delete('/new-member/{id}', [NewMemberController::class, 'destroy'])->name('new-member.destroy')->middleware(CanChangeContributer::class);

Route::get('/profile', [ProfileController::class, 'index']);
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/form', function () {
    return view('link_form');
});

Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/gg', function () {
    return view('auth.app');
});

Route::get('/welcome2', function () {
    return view('welcome2');
});

Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
