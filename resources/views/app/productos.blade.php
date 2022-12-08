@extends('layouts.app')
@section('content')
<section class="section">
    <img class="img-fluid" src="http://via.placeholder.com/1920x350.png?text=Titulo+Seccion" alt="" srcset="">

    {{-- <h1>Productos</h1> --}}
    <div class="container my-4">
        <div class="row justify-content-center">
            
                <div class="dropdown  col-lg-2 text-center my-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Marcas
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('app.showTodosProductos') }}">Todos los productos</a></li>
                        @foreach ($marcas as $marca)
                          <li><a class="dropdown-item" href="{{ route('app.buscarMarca', $marca->id) }}">{{ $marca->nombre }}</a></li>
                        @endforeach
                      
                    </ul>
                </div>
                <div class="dropdown  col-lg-2 text-center my-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('app.showTodosProductos') }}">Todos los productos</a></li>
                        @foreach ($categorias as $categoria)
                          <li><a class="dropdown-item" href="{{ route('app.buscarCategoria', $categoria->id) }}">{{ $categoria->nombre }}</a></li>
                        @endforeach
                      
                    </ul>
                </div>
                <div class="input-group  col-lg-2">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            
        </div>
    </div>
    
      
    
    
</section>
<div class="d-flex justify-content-center">
    {!! $productos->links() !!}
</div>
<section class="section">
    <div class="container ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            @foreach ($productos as $producto)
            <div class="col-lg-3 my-2">
                <div class="card" >
                @if($producto->productimages_last)
                    
                    
                    <img src="{{ asset('imagenes/productos_imagenes/'.$producto->productimages_last['producto_imagen']) }}" class="card-img-top" alt="...">    
                @else
                <img src="http://via.placeholder.com/350x200.png?text=No+Image" class="card-img-top" alt="...">
                @endif
                    <div class="card-body">
                        <h3 class="card-title">{{ $producto['nombre'] }}</h3>
                        
                        <p class="card-text">${{ $producto['precio'] }} mnx</p>
                        <a href="{{ route('app.showProducto', $producto->id) }}" class="btn btn-primary">Ver Producto</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</section>
@endsection