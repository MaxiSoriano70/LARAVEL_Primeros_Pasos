<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TecnicosController;
use Illuminate\Support\Facades\Route;

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
    //$nombre="Edin Dzeko";
    $arrayNombre=["Edin Dzeko","Celeste Severich","Karen Dominguez"];
    return view('clientes')->with("nombres",$arrayNombre);
    //return "CELESTE SEVERICH";
});
/*Route::get('/clientes',[ClientesController::class,'index'] );
Route::get('/clientes/create',[ClientesController::class,'create'] );
Route::post('/clientes',[ClientesController::class,'store'] );
//URL EJEMPLO /clientes/3/ o /clientes
Route::get('/clientes/{id}',[ClientesController::class,'show'] );
//Route::delete();
//ELIMINAR
Route::delete('/clientes',[ClientesController::class,'destroy']);//INVESTIGAR*/

Route::resource('/clientes', ClientesController::class);/*->only(['index','destroy','show']);*/