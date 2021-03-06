<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/courses', [CourseController::class, 'add']);
Route::get('/courses/{id}', [CourseController::class, 'get']);
Route::get('/courses/update/{id?}', [CourseController::class, 'update']);
Route::delete('/courses/{id}', [CourseController::class, 'delete']);
Route::post('/departments', [DepartmentController::class, 'add']);
Route::get('/departments/{id}', [DepartmentController::class, 'get']);





