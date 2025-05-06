<?php
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FixtureController;

Route::get('/', [TeamController::class, 'index'])->name('home');
Route::resource('teams', TeamController::class);
Route::resource('players', PlayerController::class);
Route::resource('fixtures', FixtureController::class);