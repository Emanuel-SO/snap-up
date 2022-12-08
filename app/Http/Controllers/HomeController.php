<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Productimage;

class HomeController extends Controller
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
        
        $marca = Marca::count();
        $categoria = Categoria::count();
        $producto = Producto::count();
        $imagenes = Productimage::count();
        
        //Como hacer que index reciba el id del usuario
        /* $user= User::find(1);
        $role_id = $user->role_id;
        $role = Role::find($role_id);
        return view('dashboard.index',compact('role')); */
        return view('dashboard.index',compact('marca','categoria','producto','imagenes'));
    }
}
