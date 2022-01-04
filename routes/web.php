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
Route::post('/login', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/regis', [RegisController::class, 'regis'])->name('regis');
Route::post('/', [RegisController::class, 'actionregis'])->name('actionregis');

Route::get('/home', [HomeController::class, 'home'])->name('home')->name('home');
Route::get('/home/delete/{id}', [HomeController::class, 'delete'])->name('home');


Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/inputScore', [ScoreController::class, 'Score'])->name('Score');
Route::post('/inputScore', [ScoreController::class, 'inputScore'])->name('inputScore');
Route::get('/showScore',  [ScoreController::class, 'showScore'])->name('showScore');
Route::get('/showScore/delete/{id}', [ScoreController::class, 'delete'])->name('showScore');
Route::get('/editScore', [ScoreUpdateController::class, 'index']);
Route::get('/editScore/{id}', [ScoreUpdateController::class, 'show']);
Route::post('/editScore/{id}', [ScoreUpdateController::class, 'update']);

Route::get('/addMember', [memberController::class, 'index'])->name('index');
Route::post('/addMember', [memberController::class, 'storeDataPost'])->name('storeDataPost');


