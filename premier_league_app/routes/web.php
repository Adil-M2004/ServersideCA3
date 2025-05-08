<?php
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\TableController;


Route::get('/fixtures/{fixture}/edit', [FixtureController::class, 'edit'])->name('fixtures.edit');
Route::put('/fixtures/{fixture}', [FixtureController::class, 'update'])->name('fixtures.update');
Route::post('/teams', [TeamController::class, 'store'])->name('teams.store');
Route::delete('/teams/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::resource('teams', TeamController::class);
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::resource('fixtures', FixtureController::class);
Route::get('/table', [TableController::class, 'index'])->name('table.index');
