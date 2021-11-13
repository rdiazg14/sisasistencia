<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnosController;

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

Route::get('/', function () {return view('auth.login'); })->name('inicio');

Route::group(['middleware' => ['auth']], function()  {


Route::get("/admin", [AdminController::class,'inicio']);
Route::get("/administrativos",[AdminController::class, 'administrativos']);
Route::get("/docentes",[AdminController::class, 'docentes']);
Route::get("/administrativosrep",[AdminController::class, 'administrativosrep']);
Route::get("/docentesrep",[AdminController::class, 'docentesrep']);
Route::get("/administrativoslist",[AdminController::class, 'administrativoslist']);
Route::get("/docenteslist",[AdminController::class, 'docenteslist']);


Route::get("/reportes", [AlumnosController::class,'reportes']);
Route::get("/lista", [AlumnosController::class,'lista']);

Route::get('/alumnos/buscar',[AlumnosController::class, 'buscar'])->name('alumnos.buscar');
Route::get('/alumnos/buscaralumno',[AlumnosController::class, 'buscaralumno'])->name('alumnos.buscaralumno');
Route::get('/alumnos/buscaralumnolist',[AlumnosController::class, 'buscaralumnolist'])->name('alumnos.buscaralumnolist');
Route::get('/alumnos/imprimir',[AlumnosController::class, 'imprimir'])->name('imprimir');
//Route::name('imprimir')->get('/alumnos/imprimir', 'AlumnosController@imprimir');
Route::resource('/alumnos',AlumnosController::class);

});
