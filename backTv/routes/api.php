<?php

use Illuminate\Http\Request;

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

Route::apiResource("services","ServicesController");
Route::apiResource("programs","ProgramOfServicesController");
Route::get('programs/getbyService/{services_id}', 'ProgramOfServicesController@getByService');
//Route::get("services/{id}","ServicesController@show");
