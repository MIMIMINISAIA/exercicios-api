<?php

use App\Http\Controllers\Exerciciocinco;
use App\Http\Controllers\Exerciciodois;
use App\Http\Controllers\Exerciciodoze;
use App\Http\Controllers\Exerciciooito;
use App\Http\Controllers\Exercicioquatro;
use App\Http\Controllers\Exercicioseis;
use App\Http\Controllers\Exerciciotres;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUm::class, 'multiplicar']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);
Route::post('exercicio/dois', 
[Exerciciodois::class, 'retornarMaior']);
Route::post('exercicio/3', [Exerciciotres::class, 'media']);
Route::post('exercicio/quatro', [Exercicioquatro::class, 'verficar']);
Route::post('exercicio/cinco',[Exerciciocinco::class, 'verificacao']);
Route::post('exercicio/seis',[Exercicioseis::class, 'idade']);
Route::post('exercicio/oito',[Exerciciooito::class, 'tabuada']);
Route::get('exercicio/doze',[Exerciciodoze::class, 'decrescente']);