<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Productimage;

class AppController extends Controller
{
    public function index(){
        
        $categorias = Categoria::all();
        $productos = Producto::with('productimages')->get();
        //$productos_imagenes = Productimage::with('producto')->get();
        
        //dd($categorias);
       
       
        
        return view("app.index", compact('productos','categorias'));
    }

    public function showProducto($producto){
        //dd($producto);
        $marca = Producto::findOrFail($producto)->marca;
        $categoria = Producto::findOrFail($producto)->categoria;
        $producto_imagenes = Producto::findOrFail($producto)->productimages;

        $producto = Producto::findOrFail($producto);

        $recomendados = Marca::findOrFail($marca->id)->productos;

        //dd($recomendados);
        //dd($producto);

        return view('app.producto', compact('producto','categoria','marca','producto_imagenes','recomendados'));
    }

    public function showTodosProductos(){
        $categorias = Categoria::all();
        $productos = Producto::with('productimages')->get();
        $marcas = Marca::all();
       
        return view('app.productos',compact('productos','categorias','marcas'));
    }
}
