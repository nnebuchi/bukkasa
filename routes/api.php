<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\MeController;
use App\Http\Controllers\Auth\SignOutController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LessonController;

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

Route::group(['middleware' => 'api', 'prefix' => 'auth'],function(){
    Route::post('signin',SignInController::class);
    Route::post('register', [SignInController::class,'register']);
    Route::post('signout',SignOutController::class);
    Route::get('me', MeController::class);
    // Tutor


});
Route::post('becometutor', [ApplicationController::class,'store']);
Route::get('tutor/explore/{id}', [TutorController::class, 'show']);
Route::get('tutors/explore', [TutorController::class, 'index']);
Route::get('tutors/languages', [TutorController::class, 'languages']);
Route::get('getTutor/{id}', [TutorController::class, 'me']);
//Create Lessons

Route::post('/tutor/createlesson',[LessonController::class,'store']);
Route::get('/tutor/lessons/{id}', [LessonController::class, 'myLesson']);
Route::post('/tutors/{teacherID}/newevent', [EventsController::class, 'store']);
