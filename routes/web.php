<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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
    return view('home');
});

//INDEX
Route::get('/Admin/index', [PesertaController::class, 'index'])->middleware('auth');
Route::get('/Admin/tambah-peserta', [PesertaController::class, 'tambahPeserta'])->middleware('auth');
Route::post('/storePeserta', [PesertaController::class, 'storePeserta']);
Route::get('/Admin/index', [PesertaController::class, 'Search'])->middleware('auth');
Route::get('/Admin/edit-peserta/{id}', [PesertaController::class, 'editPeserta'])->middleware('auth');
Route::post('/updatePeserta/{id}', [PesertaController::class, 'updatePeserta']);
Route::get('/hapusPeserta/{id}', [PesertaController::class, 'hapusPeserta']);

//REGISTER
Route::get('/Register', [LoginController::class, 'Register']);
Route::post('/actionRegister', [LoginController::class, 'actionRegister']);

//LOGIN
Route::get('/Login', [LoginController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::post('/Logout', [LoginController::class, 'Logout']);

//ADMIN
Route::get('/Admin/dashboard', [AdminController::class, 'index'])->middleware('auth');

