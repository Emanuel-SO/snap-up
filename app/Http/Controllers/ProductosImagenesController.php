<?php

namespace App\Http\Controllers;

//use Illuminate\Http\File;
use Illuminate\Support\Facades\File;
//use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Producto;

use App\Models\Productimage;

class ProductosImagenesController extends Controller
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
    public function show(Producto $producto)
    {
        
        return view('dashboard.productos_imagenes.show', compact('producto'));
    }

    public function create(Producto $producto){
        
        //dd($producto);
        return view('dashboard.productos_imagenes.create', compact('producto'));
    }

    public function store(Producto $producto, Request $request){

        $data = request()->validate([
            'producto_imagen' => ['required','image'],
        ]);

        $name = $request->producto_imagen->hashName();
       
        $test = $request->producto_imagen->move(public_path('imagenes/productos_imagenes'), $name);
        
        $image = Image::make(public_path("imagenes/productos_imagenes/{$name}"))->fit(1200,1200);
        $image->save();

        $producto->productimages()->create(['producto_imagen' => $name]);

        return view('dashboard.productos_imagenes.show', compact('producto'));
    }

    public function edit( $producto_imagen) {
        $producto_imagen = Productimage::findOrFail($producto_imagen);

        return view('dashboard.productos_imagenes.edit', compact('producto_imagen'));
    }

    public function update($producto_imagen, Request $request) {
        $data = request()->validate([
            'producto_imagen' => ['required','image'],
        ]);

        $name = $request->producto_imagen->hashName();
        $producto_imagen = Productimage::findOrFail($producto_imagen);
        $path = 'imagenes/productos_imagenes/'.$producto_imagen->producto_imagen;

        if(File::exists($path)){
            
            File::delete($path);
           //dd('si');
        }
        $test = $request->producto_imagen->move(public_path('imagenes/productos_imagenes'), $name);
        
        $image = Image::make(public_path("imagenes/productos_imagenes/{$name}"))->fit(1200,1200);
        $image->save();

        $producto_imagen->update(['producto_imagen' => $name]);

        return redirect()->back();
    }

    public function destroy( $producto_imagen) {
        $producto_imagen = Productimage::findOrFail($producto_imagen);
        $path = 'imagenes/productos_imagenes/'.$producto_imagen->producto_imagen;

        if(File::exists($path)){
            
            File::delete($path);
           //dd('si');
        }
        $producto_imagen->delete();
        //dd($producto_imagen);
        return redirect()->back();
    }
}
