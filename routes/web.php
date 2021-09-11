<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
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

Route::get('/', HomeController::class);
Route::resource('patients', 'App\Http\Controllers\PatientController');

/* Route::get('patients/create', [PatientsController::class , 'create']);
Route::get('patients/{name}', [PatientsController::class , 'show']);
 */
/* Route::get('/', function () {
    //return view('welcome');
    return "<h1>Página principal LIS</h1>";
}); 

Route::get('patients', function () {
    return "<h1>Aquí se listarán los pacientes de la BD del LIS</h1>";
});

Route::get('patients/create', function () {
    return "<h1>Formulario para el ingreso de pacientes al LIS</h1>";
});

Route::get('patients/{name}/{age?}', function ($name , $age=null) {
    if ($age){
        return "<h1>Paciente $name y tiene $age años de edad.</h1>";
    }else {
        return "<h1>Paciente $name.</h1>";
    }
}); */