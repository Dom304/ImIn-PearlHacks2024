<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\OpenAIController;
use app\Http\Controllers\JobsController;




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

Route::get('/', function () {
    return view('login');
});


Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile/{user_id}', [UserController::class, 'profile'])->name('userProfile');

Route::get('/jobs', [JobsController::class, 'list'])->name('jobs');

Route::post('/analyze-questionnaire', [OpenAIController::class, 'analyze'])->name('analyzeData');
