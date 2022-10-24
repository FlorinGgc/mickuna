<?php

use App\Http\Controllers\DiagnosticosController;
use App\Http\Controllers\ImportadoraVentaRyaController;
use App\Http\Controllers\AutomotoraRepuestoController;
use App\Http\Controllers\AutomotoraReController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\EmpresanacionalController;
use App\Http\Controllers\empresaresiduosinducontroller;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SucursalesController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

// logout
Route::get('logout', '\App\Http\Controllers\LoginController@logout');

Route::get('/', function () {
    return view('layouts.vistapadre');
});

Route::resource('cliente','\App\Http\Controllers\ClienteController');

Route::resource('servicio','\App\Http\Controllers\ServicioController');
Route::delete('servicio/eliminar/{id}',[ServicioController::class,'destroy'])->name('servicio.destroy');


Route::resource('diagnostico','\App\Http\Controllers\DiagnosticosController');
Route::delete('diagnostico/eliminar/{id}',[DiagnosticosController::class,'destroy'])->name('diagnostico.destroy');







Route::resource('automotoraregional','\App\Http\Controllers\AutomotoraReController');
Route::delete('automotoraregional/eliminar/{id}',[AutomotoraReController::class,'destroy'])->name('automotoraregional.destroy');


Route::resource('automotorarepuesto','\App\Http\Controllers\automotorarepuestoController');
Route::delete('automotorarepuesto/eliminar/{id}',[AutomotoraRepuestoController::class,'destroy'])->name('automotorarepuesto.destroy');

Route::resource('ImportadoraVentaRyA','\App\Http\Controllers\ImportadoraVentaRyaController');
Route::delete('ImportadoraVentaRyA/eliminar/{id}',[ImportadoraVentaRyaController::class,'destroy'])->name('registro.destroy');

Route::resource('Sucursales','\App\Http\Controllers\SucursalesController');
Route::delete('Sucursales/eliminar/{id}',[SucursalesController::class,'destroy'])->name('sucursal.destroy');


Route::resource('Insumo','\App\Http\Controllers\InsumoController');
Route::delete('Insumo/eliminar/{id}',[InsumoController::class,'destroy'])->name('insumo.destroy');


Route::resource('Bodega','\App\Http\Controllers\BodegaController');
Route::delete('Bodega/eliminar/{id}',[BodegaController::class,'destroy'])->name('bodega.destroy');


Route::resource('EmpresaResiduosindustriales','\App\Http\Controllers\empresaresiduosindu');
Route::delete('EmpresaResiduosindustriales/eliminar/{id}',[empresaresiduosinducontroller::class,'destroy'])->name('empresaresiduoindu.destroy');



Route::resource('EmpresaNacional','\App\Http\Controllers\EmpresanacionalController');
Route::delete('EmpresaNacional/eliminar/{id}',[EmpresanacionalController::class,'destroy'])->name('empresanacional.destroy');


Route::post('/logout', [logoutcontroller::class, 'perform']);

Route::get('/login',[LoginController::class, 'show']);

Route::post('/login', 'LoginController@login')->name('login.perform');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/logout',[logoutcontroller::class, 'perform']);
//Route::post('/logout', 'logoutcontroller@perform')->name('logout.perform');

Auth::routes();

