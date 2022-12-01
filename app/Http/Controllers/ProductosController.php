<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;

class ProductosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::all();
        return view('dashboard.productos.index',compact('productos'));
    }

    public function create(){
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('dashboard.productos.create', compact('marcas', 'categorias'));
    }
    
    public function store(){


        
        //dd(request()->all());
        $data = request()->validate([
            'nombre' => 'required',
            'descripcion' => ['required'],
            'precio' => ['required','numeric'],
            'cantidad' => ['required','numeric'],
            'oferta' => '',
            'categoria_id' => 'required',
            'marca_id' => 'required'
        ]);
        

        Producto::create($data);
        return redirect('/dashboard/productos');
    }

    public function edit(Producto $producto){
        //dd($producto);
        return view('dashboard.productos.edit', compact('producto'));
    }

    public function update(Producto $producto){
        $data = request()->validate([
            'nombre' => 'required'
        ]);

        $producto->update($data);
        return redirect('dashboard/productos');
    }

    public function destroy(Producto $producto){

        $producto->delete();
        return back();
    }
}
