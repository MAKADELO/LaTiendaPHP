<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;

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
    return view('Welcome');
});

// First Route
// Route -> get

Route::get('/Home', function () { 
    echo "Hola le dijo la araña a la mosca"; 
});

Route::get('/Arreglo', function() {

    // Arreglo de estudiantes
    $estudiantes = [
        "AN" => 1,
        "KV" => "Kevin",
        "JN" => 1.5,
        "DV" => true,
        "AR" => [
            25,
            "Veinticinco"
        ],
    ];
    
    // Verificar la variable
    
    echo "<hr />";
    echo "<pre>";
    echo "<h1>Antes de eliminar</h1>";
    echo "<br>";
    var_dump($estudiantes);
    echo "<pre>";

    //Eliminar un elemnto de un array

    unset($estudiantes["JN"]);

    echo "<hr />";
    echo "<h1>Después de eliminar</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Agregar un elemento al array

    $estudiantes["CA"] = "Carlos";

    echo "<hr />";
    echo "<h1>Después de agregar un elemento</h1>";
    echo "<pre>";
    var_dump($estudiantes);
    echo "<pre>";

    // Recorrer un arreglo

    // foreach ($estudiantes as $key => $e) {
    //     echo $key;
    //     echo "<hr />";
    //     echo $e;
    //     echo "<hr />";
    // }
});

Route::get('/Paises', function () {

    $paises = [
        "Colombia" => [
            "CAPITAL" => "Bogotá",
            "MONEDA" => "Peso",
            "POBLACION" => 50.88,
            "CIUDADES" => [
                "Medelín",
                "Barranquilla",
                "Cali",
            ]
        ],
        "Peru" => [
            "CAPITAL" => "Lima",
            "MONEDA" => "Sol",
            "POBLACION" => 32.97,
            "CIUDADES" => [
                "Cusco",
                "Arequipa",
                "Trujillo",
            ]
        ],
        "Paraguay" => [
            "CAPITAL" => "Asunción",
            "MONEDA" => "Guaraní paraguayo",
            "POBLACION" => 7.13,
            "CIUDADES" => [
                "Ciudad del Este",
                "Encarnación",
                "Villarrica",
            ]
        ],
        "Ecuador" => [
            "CAPITAL" => "Quito",
            "MONEDA" => "Dólar Estadounidense",
            "POBLACION" => 17.64,
            "CIUDADES" => [
                "Guayaquil",
                "Cuenca",
                "Ambato",
            ]
        ],
        "Argentina" => [
            "CAPITAL" => "Buenos Aires",
            "MONEDA" => "Peso Argentino",
            "POBLACION" => 45.38,
            "CIUDADES" => [
                "Rosario",
                "Santa Fe",
                "Salta",
            ]
        ],
    ];

    // Mostrar vista de paises

    return view('paises')->with('paises', $paises);
});

/**
 * Rutas REST Producto
 * 
 */

 Route::resource('productos', ProductoController::class);
 Route::resource('cart', CartController::class, ['only'=>['index', 'store', 'destroy']]);