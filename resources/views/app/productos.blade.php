@extends('layouts.app')
@section('content')
<section class="section">
    <img class="img-fluid" src="https://placehold.jp/3d4070/ffffff/1920x350.png" alt="" srcset="">

    {{-- <h1>Productos</h1> --}}
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="dropdown m-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Opciones
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Buscar por Categoría</a></li>
                      <li><a class="dropdown-item" href="#">Buscar por Marcas</a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 px-3">
                @foreach ($categorias as $categoria )
                    <button class="btn btn-primary col-sm-9 col-md-2 mx-2 my-2">{{ $categoria->nombre }}</button>
                @endforeach
            </div>
            <div class="col-sm-12 px-3">
                @foreach ($marcas as $marca )
                    <button class="btn btn-primary col-sm-9 col-md-2 mx-2 my-2">{{ $marca->nombre }}</button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            @foreach ($productos as $producto)    
                <div class="col col-lg-3 my-2">
                    <div class="card" >
                        <img src="http://placehold.jp/350x200.png?text=No+Image" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">${{ $producto->precio }} mxn</p>
                            <a href="#" class="btn btn-primary">Ver Producto</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</section>
@endsection