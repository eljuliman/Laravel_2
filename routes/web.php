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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get("/", "MiControlador@index");
Route::get("/crear", "MiControlador@create");
Route::get("/articulos", "MiControlador@store");
Route::get("/mostrar", "MiControlador@show");
Route::get("/contacto", "MiControlador@contact");
Route::get("/galeria", "MiControlador@galeriaFunction");
Route::get("/galeriasecond", "MiControlador@galeriasecondFunction");
Route::get("/leer", function (){

   $articulos=\App\Articulo::all();
    foreach ($articulos as $articulo) {

        echo $articulo->prueba_columna;
   }
});


Route::get("/insertar", function (){

    $articulos=new \App\Articulo;

    $articulos->id="5";
    $articulos->nombrearticulo="testinsertar";
    $articulos->precio=100;

    $articulos->save();
});