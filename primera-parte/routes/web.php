<?php

use Illuminate\Support\Facades\Route;
//login
use App\Http\Controllers\Auth\LoginController;
//producto
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

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
// Vista principal con el formulario de inicio de sesión
Route::get('/', [LoginController::class,'showLoginForm'])->name('login.get');
Route::post('/login', [LoginController::class,'login'])->name('login'); //Validar datos de sesión
Route::get('/admin_logout', [LoginController::class,'logout'])->name('logout'); //Cerrar sesión

Route::get('/listar_productos', [ProductoController::class,'index'])->name('producto.index'); //Listado de productos
Route::get('producto/create',[ProductoController::class,'create'])->name('producto.create'); //Vista de creación de productos
Route::post('producto/store',[ProductoController::class,'store'])->name('producto.store'); //Función para guardar productos en la bd
Route::get('producto/edit/{id}', [ProductoController::class,'edit'])->name('producto.edit'); //Vista de edición de productos
Route::put('producto/update/{id}',[ProductoController::class,'update'])->name('producto.update'); //Función para actualizar productos en la bd
Route::get('producto/delete/{id}', [ProductoController::class,'delete'])->name('producto.delete');  //Función para eliminar productos en la bd