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

Route::get('/', function () {
    return view('auth.login');
})->name('inicio');

Route::group(['middleware' => ['auth']], function()  {


Route::get("/admin", [AdminController::class,'inicio']);

Route::get("/reportes", [AdminController::class,'reportes']);

Route::get('/alumnos/buscar',[AlumnosController::class, 'buscar'])->name('alumnos.buscar');

Route::resource('/alumnos',AlumnosController::class);

});
