<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\contactosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//API CRUD USUARIOS//

Route::get('/users', [UserController::class,'index']);
Route::post('/users', [UserController::class,'store']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::put('/users/{id}', [UserController::class,'update']);
Route::delete('/users/{id}', [UserController::class,'destroy']);

//FORMULARIO CONTACTO//

Route::post('/contact', [contactosController::class,'enviarMensaje']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
