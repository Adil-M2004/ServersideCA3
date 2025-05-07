<?php
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\TableController;


Route::get('/', [TeamController::class, 'index'])->name('home');
Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);
Route::resource('fixtures', FixtureController::class);
Route::get('/table', [TableController::class, 'index'])->name('table.index');