<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\memberController;

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
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/inputScore', [ScoreController::class, 'Score'])->name('Score');
Route::post('/inputScore', [ScoreController::class, 'inputScore'])->name('inputScore');
Route::get('/addMember', [memberController::class, 'index'])->name('index');
Route::post('/addMember', [memberController::class, 'storeDataPost'])->name('storeDataPost');
