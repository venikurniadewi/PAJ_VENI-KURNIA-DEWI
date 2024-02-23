<?php

use Illuminate\Support\Facades\Route; // Mengimpor kelas Route dari framework Laravel
use App\Http\Controllers\VoterController; // Mengimpor VoterController
use App\Http\Controllers\TaskController; // Mengimpor TaskController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // Mendefinisikan route untuk URL utama ('/')
    return view('welcome'); // Mengembalikan tampilan 'welcome'
});

// Mendefinisikan route untuk URL '/voters' yang diproses oleh method 'viewVoter' dari VoterController
Route::get('/voters', [VoterController::class, 'viewVoter']); 
// Mendefinisikan route untuk URL '/task' yang diproses oleh method 'index' dari TaskController
Route::get('/task', [TaskController::class, 'index']);  
// Mendefinisikan route untuk URL '/task/create' yang diproses oleh method 'create' dari TaskController
Route::get('/task/create', [TaskController::class, 'create']);
// Mendefinisikan route untuk URL '/task/store' yang diproses oleh method 'store' dari TaskController
Route::post('/task/store', [TaskController::class, 'store']);
Route::get('/task/{task}', [TaskController::class, 'show']);
Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
Route::put('/task/{task}', [TaskController::class, 'update']);