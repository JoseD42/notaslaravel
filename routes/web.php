<?php

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

Route::get('notas', function () {
    $notas = DB::table('notas')->get();

    return view('notas', ['notas' => $notas]);
}) ->name('listar');

Route::get('notas/agregar', function () {
    return view('agregar');
}) ->name('nuevanota');

Route::get('notas/{id}/editar', function ($id) {
    $notas = DB::table('notas')
    ->where('id', $id)
    ->first();

    return view('editar', ['notas' => $notas]);
})->name('notas.edit');

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
