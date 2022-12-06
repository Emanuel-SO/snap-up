<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;

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
    
    public function store(Request $request){

        $producto = new Producto();

        $producto->nombre = $request->nombre; 
        $producto->descripcion = $request->descripcion; 
        $producto->precio = $request->precio; 
        $producto->cantidad = $request->cantidad; 
        $producto->oferta = $request->oferta; 
        $producto->marca_id = $request->marca_id; 
        $producto->categoria_id = $request->categoria_id; 
        
       //dd(request()->all());
        //$data = request()->all();
        //dd($producto);
        $producto->save();
        
        return redirect('/dashboard/productos');
        /* Producto::create($data);
        return redirect('/dashboard/productos'); */
    }

    public function edit(Producto $producto){
        $marcas = Marca::all();
        $categorias = Categoria::all();

        $pCategoria = Categoria::find($producto->categoria_id);
        $pMarca = Marca::find($producto->marca_id);
        
       
        //dd($producto);
        return view('dashboard.productos.edit', compact('producto','categorias','marcas','pCategoria','pMarca'));
    }

    public function update(Producto $producto){
        $data = request()->validate([
            'nombre' => ['required','unique:App\Models\Producto,nombre'],
            'descripcion'=> 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'oferta' => 'required',
            'marca_id' => 'required',
            'categoria_id' => 'required',
        ]);

        //dd($data);
        //dd($producto);
        
        //dd($producto);
        $producto->update($data);


        return redirect('dashboard/productos');
    }

    public function destroy(Producto $producto){

        $producto->delete();
        return back();
    }
}
