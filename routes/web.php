<?php

use App\product;
use App\category;


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

    /*  $prod = new Product();

    $prod->nombre = 'Producto 3';
    $prod->slug = 'Producto 3';
    $prod->category_id = 2;
    $prod->description_corta = 'Producto ';
    $prod->description_larga = 'Producto ';
    $prod->especificaciones = 'Producto ';
    $prod->datos_de_interes = 'Producto ';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No';
    $prod->save(); 

    return $prod; */
    

    //return view('welcome');

  /*   $cat = Category::find(1)->products;
    
    return $cat; */

    /* $prod = Product::find(4)->category;
    return $prod;
  */

    return view('tienda.index');

    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
