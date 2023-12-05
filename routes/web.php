<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/registro', [HomeController::class,'logado']);
Route::get('/adicionar',[RegistroController::class,'adicionar']);
Route::get('/apagar',[RegistroController::class,'apagar']);
Route::get('/alterar',[RegistroController::class,'alterar']);
Route::get('/listar',[RegistroController::class,'listar']);
Route::post('/create',[RegistroController::class,'store']);
Route::post('/delete',[RegistroController::class,'delete']);
Route::post('/update',[RegistroController::class,'update']);
Route::post('/read',[RegistroController::class,'read']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('registro');
    })->name('dashboard');
});


