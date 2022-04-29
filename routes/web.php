<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;

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
    return view('welcome');
});

Route::get('notas', 'NotasController@index') ->name('listar');

Route::get('/agregar', 'NotasController@agregar') ->name('nuevanota');

route::post('crear', 'NotasController@crear')->name('notas.store');

Route::get('notas/{id}/editar', 'NotasController@editar')->name('notas.edit');

Route::put('notas/{notas}/editar', 'NotasController@update')->name('notas.update');

Route::delete('notas/{id}', 'NotasController@destroy')->name('notas.destroy');

/*Route::get('notas/crear', function (){
    return 'Aquí será la vista para crear las notas';
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Aquí será para editar las notas:' .$id;
});

#Tarea:
Route::get('ruta1', function (){
    return 'Aquí será la ruta 1';
});

Route::get('ruta1/prueba', function (){
    return 'Aquí será la ruta 1 pa pruebas';
});

Route::get('ruta2', function (){
    return 'Aquí será la ruta 2';
});

Route::get('ruta2/prueba2', function (){
    return 'Aquí será la ruta 2 pa pruebas';
});

Route::get('ruta1/actualizar', function (){
    return 'Aquí será la ruta para actualizar';
});*/

#Clase viernes 04 marzo:
