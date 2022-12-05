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
        $productos = Producto::all();
        $productos_imagenes = Productimage::all();
        //dd($productos);
        //$data = [];

        /* foreach ($productos as $producto){
           if($producto->oferta === 1){
                $data_1[] = $producto;
                $data_2[] = $producto->productimages()->first();
                
           }
        }
        //dd($data_1,$data_2);
        //dd($data_1);
        $productos = $data_1;

        $imagenes = $data_2; */
        foreach($productos as $producto){
            if($producto->oferta === 1){
                $data_1[] = $producto;
                
            }
        }
        $productos = $data_1;
        //dd($productos);
        
        return view("app.index", compact('productos'));
    }
}
