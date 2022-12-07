<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriasController extends Controller
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
        $categorias = Categoria::all();
        return view('dashboard.categorias.index',compact('categorias'));
    }
    public function create(){
        

        return view('dashboard.categorias.create');
    }
    
    public function store(){
        $data = request()->validate([
            'nombre' => ['required','unique:App\Models\Categoria,nombre'],
        ]);

        Categoria::create($data);
        return redirect()->route('categorias.index');
    }

    public function edit(Categoria $categoria){
        //dd($categoria);
        return view('dashboard.categorias.edit', compact('categoria'));
    }

    public function update(Categoria $categoria){
        $data = request()->validate([
            'nombre' => ['required','unique:App\Models\Categoria,nombre'],
        ]);

        $categoria->update($data);
        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria){

        $categoria->delete();
        return back();
    }
}
