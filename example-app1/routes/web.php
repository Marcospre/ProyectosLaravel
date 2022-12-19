

<?php

use App\Http\Controllers\Controlador1;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('saludo');
});

Route::get('/saludos', function () {
    return "Hola mundo";
});

Route::get('/usuario/{nombre}',function($nombre){
    return "Hola ".$nombre;
});

Route::get('/dni/{DNI}',function($DNI){
    return "Mi DNI ".$DNI;
})->where(['DNI'=>'[0-9]{8}[A-Z]']);

Route::get('/dni1/{DNI}',function($DNI){
    return "Mi DNI es ".$DNI." y la letra es ".substr($DNI,strlen($DNI)-1);
})->where(['DNI'=>'[0-9]{8}L']);
    
Route::get('/producto/{codigo}',function($codigo){
    return view('codigo',['codigo' => $codigo]);
})->where(['codigo'=>'[aA-zZ]{3}[0-9]{4}']);

Route::get('/registro',function(){
    return view("Formulario");
});

Route::post('/mostrardatos',function(Request $req){
    $datos = $req->input();
    return view("mostrardatos",compact('datos'));
});

Route::get('/registro2',function(){
    return view("Formulario");
});

Route::post('/mostrardatosTabla',function(){
    return view("tabla");
});

/*Ejercicio6*/
// Route::get('/registro3',function(){
//     return view("FormularioProducto");
// });

// Route::post('/procesaForm3',function(){
//     return view("mostrarProducto");
// });

// Route::get('/mostrar/{tipo}/{codigo}',function($tipo,$codigo){
//     return view('mostrarProductoFinal',['tipo' => $tipo, 'codigo' => $codigo]);
// });

/*Ejercicio8*/

Route::get('/registro3',[Controlador1::class,"verFormularioProducto"]);

Route::post('/procesaForm3',[Controlador1::class,"verMostrarProducto"]);

Route::get('/mostrar/{tipo}/{codigo}',[Controlador1::class,"verMostrarProductoFinal"]);

Route::post('/registrarFormu',[Controlador1::class,"comrobarFormu"]);

/*Ejercicio9*/

/*Ejercicio10*/

Route::get('/mostrarFormu', function () {
    return view("FormularioUsuario");
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
