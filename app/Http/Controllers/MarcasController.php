<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marca;

class MarcasController extends Controller
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

    /* public function isAdmin(){
        if(Auth::user()->role_id === 1){
            return;
        }else{
            return view('home.show');
        }
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{  
        $marcas = Marca::all();
        return view('dashboard.marcas.index',compact('marcas'));
    }

    public function create(){
        

        return view('dashboard.marcas.create');
    }
    
    public function store(){
        $data = request()->validate([
            'nombre' => 'required',
        ]);

        Marca::create($data);
        return redirect('/dashboard/marcas');
    }

    public function edit(Marca $marca){
        return view('dashboard.marcas.edit', compact('marca'));
    }

    public function update(Marca $marca){
        $data = request()->validate([
            'nombre' => 'required'
        ]);

        $marca->update($data);
        return redirect('dashboard/marcas');
    }

    public function destroy(Marca $marca){

        $marca->delete();
        return back();
    }
}
