<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\ScoreUpdateController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'actionlogout'])->name('logout');
Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/regis', [RegisController::class, 'regis'])->name('regis');
Route::post('/regis', [RegisController::class, 'actionregis'])->name('actionregis');

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('/dashboard', [HomeController::class, 'studentHome'])->name('studentHome')->middleware('auth');

Route::get('/inputScore', [ScoreController::class, 'Score'])->name('Score')->middleware('auth');
Route::post('/inputScore', [ScoreController::class, 'inputScore'])->name('inputScore');
Route::get('/showScore',  [ScoreController::class, 'showScore'])->name('showScore')->middleware('auth');
Route::get('/deleteScore/{id}', [ScoreController::class, 'delete'])->name('showScore');
Route::get('/editScore/{id}', [ScoreController::class, 'edit']);
Route::post('/editScore', [ScoreController::class, 'update'])->name('update');

Route::get('/addMember', [memberController::class, 'index'])->name('index')->middleware('auth');
Route::post('/addMember', [memberController::class, 'storeDataPost'])->name('storeDataPost');
Route::get('/editPerson/{id}', [memberController::class, 'edit']);
Route::post('/editPerson', [memberController::class, 'update'])->name('update');
Route::get('/deletePerson/{id}', [memberController::class, 'delete'])->name('delete');

