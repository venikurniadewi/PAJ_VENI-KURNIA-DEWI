<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

//Menanggapi permintaan GET pada path atau URI /voter
Route::get('/voter', [VoterController::class, 'viewVoter']);
//Menanggapi permintaan GET pada path atau URI /subjectStudent
Route::get('/subjectStudent', [SubjectController::class, 'viewStudentSubject']);
//Menanggapi permintaan GET pada path atau URI /subjectTeacher
Route::get('/subjectTeacher', [SubjectController::class, 'viewTeacherSubject']);
//Menanggapi permintaan GET pada path atau URI /subjectAdmin
Route::get('/subjectAdmin', [SubjectController::class, 'viewAdminSubject']);
//Menanggapi permintaan GET pada path atau URI /userStudent
Route::get('/userStudent', [UserController::class, 'viewStudentUser']);
//Menanggapi permintaan GET pada path atau URI /userTeacher
Route::get('/userTeacher', [UserController::class, 'viewTeacherUser']);
//Menanggapi permintaan GET pada path atau URI /userAdmin
Route::get('/userAdmin', [UserController::class, 'viewAdminUser']);
