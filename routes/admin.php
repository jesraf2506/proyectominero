<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EquipoController;

//colocamos un prefix  admin en el RouteServiceProvider

Route::get('', [HomeController::class, 'index']);



Route::get('equipo/listado',[EquipoController::class, 'index'])->name('equipo.index');
Route::get('equipo/ver/{equipo}', [EquipoController::class, 'show'])->name('equipo.show');
Route::get('equipo/editar/{equipo}',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/actualizar/{equipo}', [EquipoController::class, 'update'])->name('equipo.update');

//Route::get('prueba', [EquipoController::class, 'show'])->name('equipo.show');
