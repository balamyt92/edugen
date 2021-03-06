<?php

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

use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('home', ['text' => session('text')]);
});

Route::post('/save-text', [IndexController::class, 'saveText'])
    ->name('save-text');

Route::post('/create-job', [IndexController::class, 'createJob'])
    ->name('create-job');

Route::post('/test-check', [IndexController::class, 'createJob'])
    ->name('test-check');
