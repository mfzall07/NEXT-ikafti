<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AlumniController;
use App\Http\Controllers\API\AnnouncementController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\InformationController;
use App\Http\Controllers\API\JobController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::post('login', [AuthController::class, 'login']);
    Route::apiResource('announcement', AnnouncementController::class)->only('index', 'show');
    Route::post('alumni-register', [AlumniController::class, 'alumniRegister']);
    Route::apiResource('job', JobController::class)->only('index', 'show');
    Route::apiResource('alumni', AlumniController::class)->only('index', 'show');
    Route::get('waiting-list', [AlumniController::class, 'waitingList']);
    Route::post('approve-alumni/{id}', [AlumniController::class, 'approve']);
    Route::post('decline-alumni/{id}', [AlumniController::class, 'decline']);
    Route::apiResource('information', InformationController::class)->only('index', 'show');
    Route::middleware('auth:sanctum')->group(function(){
        Route::post('logout', [AuthController::class, 'logout']);
        Route::apiResource('announcement', AnnouncementController::class)->except('index', 'show');
        Route::apiResource('admin', AdminController::class);
        Route::apiResource('job', JobController::class)->except('index', 'show');
        Route::apiResource('alumni', AlumniController::class)->except('index', 'show');
    });
});
