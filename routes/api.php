<?php

use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\API\TodoController;
use App\Http\Controllers\TestQueueEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("students", StudentApiController::class);

//Todo Route

Route::resource("todo", TodoController::class);
//Route::post("todo123/{id}", 'App\Http\Controllers\Api\TodoController@update');

//Jobs and Queue Examples:
// Route::get('send-queue-email', [TestQueueEmail::class,'sendTestEmails']);
