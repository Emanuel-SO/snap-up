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
       /*  User::find(1)->with(['posts' => function ($query) {
            $query->first();
        }]); */
        
        $productos = Producto::with('productimages_last')->where('oferta',1)->paginate(8);
        //$productos_imagenes = Productimage::with('producto')->get();
        
        //dd($productos);
       
       
        
        return view("app.index", compact('productos','categorias'));
    }

    public function showProducto($producto){
        //dd($producto);
        $marca = Producto::findOrFail($producto)->marca;
        $categoria = Producto::findOrFail($producto)->categoria;
        $producto_imagenes = Producto::findOrFail($producto)->productimages;
        $imagen = Producto::with('productimages_last')->where('id',$producto)->first();
        //dd($imagen->productimages_last );
        if($imagen->productimages_last === null){
            $imagen = null;
        }else{
            $imagen = $imagen->productimages_last->producto_imagen;
        }
        $producto = Producto::findOrFail($producto);

        $recomendados = Marca::findOrFail($marca->id)->productos;
        //dd($recomendados);

        return view('app.producto', compact('producto','categoria','marca','producto_imagenes','recomendados','imagen'));
    }

    public function showTodosProductos(){
        $productos = Producto::with('productimages')->paginate(8);
        
        /* if(request('search')){
            $productos = Producto::when($request->search, function ($query, $search) {
                return $query->where('nombre', 'like', $search = "%{$search}%")
                    ->orWhere('descripcion', 'like', $search);
            })->get();
        } */
        
        $categorias = Categoria::all();
        $marcas = Marca::all();
       
        return view('app.productos',compact('productos','categorias','marcas'));
    }

    public function ofertas($categoria){
        
        $categorias = Categoria::all();
        $productos = Producto::with('productimages_last')->where('oferta',1)->where('categoria_id', $categoria)->paginate(8); 
        
        return view("app.index", compact('productos','categorias'));
    }

    public function buscarCategoria($id){
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $productos = Producto::with('productimages_last')->where('categoria_id',$id)->paginate(8);

        

        return view('app.productos',compact('productos','categorias','marcas'));

    }

    public function buscarMarca($id){
        $categorias = Categoria::all();
        $marcas = Marca::all();
        $productos = Producto::with('productimages_last')->where('marca_id',$id)->paginate(8);

        

        return view('app.productos',compact('productos','categorias','marcas'));
    }
}
