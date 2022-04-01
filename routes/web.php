<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('home');
Route::get('/request', [App\Http\Controllers\PageController::class, 'request'])->name('request');
Route::post('/request', [App\Http\Controllers\PageController::class, 'requestData']);


Route::get('/check1', [App\Http\Controllers\PageController::class, 'check1'])->name('check1');
Route::get('/check2', [App\Http\Controllers\PageController::class, 'check2'])->name('check2');
Route::get('/accept', [App\Http\Controllers\PageController::class, 'accept'])->name('accept');

Auth::routes();

Route::group(['prefix' => 'manage', 'namespace' => 'App\Http\Controllers\Admin'], function (){
    Route::get('/', 'MainController@index')->name('manage');
    Route::resource('vars', 'VarsController', ['action'=>'index']);
    Route::resource('freight-charges', 'FreightChargesController', ['action'=>'index']);
});
