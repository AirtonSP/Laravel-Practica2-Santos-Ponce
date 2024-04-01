<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\EspecialidadController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animales',[AnimalController::class,'index']); 
Route::get('animales/{id}',[AnimalController::class,'show']); 
Route::post('animales',[AnimalController::class,'store']); 
Route::patch('animales/{id}',[AnimalController::class,'update']); 
Route::delete('animales/{id}',[AnimalController::class,'destroy']); 

Route::get('especies',[EspecieController::class,'index']); 
Route::get('especies/{id}',[EspecieController::class,'show']); 
Route::post('especies',[EspecieController::class,'store']); 
Route::patch('especies/{id}',[EspecieController::class,'update']); 
Route::delete('especies/{id}',[EspecieController::class,'destroy']); 

Route::get('recintos',[RecintoController::class,'index']); 
Route::get('recintos/{id}',[RecintoController::class,'show']); 
Route::post('recintos',[RecintoController::class,'store']); 
Route::patch('recintos/{id}',[RecintoController::class,'update']); 
Route::delete('recintos/{id}',[RecintoController::class,'destroy']); 

Route::get('cuidadores',[CuidadorController::class,'index']); 
Route::get('cuidadores/{id}',[CuidadorController::class,'show']); 
Route::post('cuidadores',[CuidadorController::class,'store']); 
Route::patch('cuidadores/{id}',[CuidadorController::class,'update']); 
Route::delete('cuidadores/{id}',[CuidadorController::class,'destroy']); 

Route::get('actividades',[ActividadController::class,'index']); 
Route::get('actividades/{id}',[ActividadController::class,'show']); 
Route::post('actividades',[ActividadController::class,'store']); 
Route::patch('actividades/{id}',[ActividadController::class,'update']); 
Route::delete('actividades/{id}',[ActividadController::class,'destroy']); 

Route::get('especialidades',[EspecialidadController::class,'index']); 
Route::get('especialidades/{id}',[EspecialidadController::class,'show']); 
Route::post('especialidades',[EspecialidadController::class,'store']); 
Route::patch('especialidades/{id}',[EspecialidadController::class,'update']); 
Route::delete('especialidades/{id}',[EspecialidadController::class,'destroy']); 