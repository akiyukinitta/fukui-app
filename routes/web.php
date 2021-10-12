<?php

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

Route::resource('groupe', 'App\Http\Controllers\GroupesController');
Route::resource('member', 'App\Http\Controllers\MembersController');
Route::get('/teltime', 'App\Http\Controllers\TelTimeController@index');
Route::put('/teltime', 'App\Http\Controllers\TelTimeController@change');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test/index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

