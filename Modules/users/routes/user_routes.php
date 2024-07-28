<?php

namespace Modules\Users\Routes;

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| User Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an user module.
| It is a breeze. Simply tell laravel the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::get('/',[UserController::class , 'login']);
});