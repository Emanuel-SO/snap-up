<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

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

    public function create(){

        return view('dashboard.productos_imagenes.create');
    }
}
