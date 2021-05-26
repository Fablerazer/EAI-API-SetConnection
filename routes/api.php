<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('budgeting', 'App\Http\Controllers\BudgetingController@index');
Route::post('budgeting', 'App\Http\Controllers\BudgetingController@create');
Route::put('/budgeting/{id}', 'App\Http\Controllers\BudgetingController@update');
Route::delete('/budgeting/{id}', 'App\Http\Controllers\BudgetingController@delete');

Route::get('laporanKeuangan', 'App\Http\Controllers\laporanKeuanganController@index');
Route::post('laporanKeuangan', 'App\Http\Controllers\laporanKeuanganController@create');
Route::put('/laporanKeuangan/{id}', 'App\Http\Controllers\laporanKeuanganController@update');
Route::delete('/laporanKeuangan/{id}', 'App\Http\Controllers\laporanKeuanganController@delete');
