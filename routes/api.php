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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ->middleware(['auth:api'])
Route::namespace('Api\User')->prefix('users/me')->group(function () {
    Route::resource('projects', 'ProjectController');
    Route::resource('projects.environments', 'EnvironmentController');
});
