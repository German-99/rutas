<?php

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
    return "Hola, estás en la raíz del dominio";
});

Route::get("/noticias", function() {
    return "Estás en la seccion de noticias";
});

Route::post("/noticias", function () {
    return "Esta ruta es para agregar nuevas noticias";
});

Route::match(["get", "post", "delete"],"/blog", function (){
    return "Aqui llegamos con get y post";
});

Route::any("/promociones", function () {
    return "Aqui llegamos con todos los metodos HTTP";
});

Route::get("/usuarios/{id}", function ($id) {
    return "Aqui se muestra la informacion del usuario: " . $id;
});

Route::get("/bienvenida/{nombre?}", function ($nombre = "usuario") {
    $respuesta = "Bienvenido";
    //if($nombre) {
        $respuesta .= " " . $nombre;
    /*} else {
        $respuesta .= " usuario";
    }*/
    return $respuesta;
});