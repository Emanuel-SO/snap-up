@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('img\catalogo.jpg') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="900" height="150" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Mira estos Productos</h1>
          </div>
        </div>
      </div>

    {{-- <h1>Productos</h1> --}}
    <div class="container my-4">
        <div class="row justify-content-center">
            
                <div class="dropdown  col-lg-2 text-center my-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Buscar por Marcas
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($marcas as $marca)
                        <li><a class="dropdown-item" href="{{ route('app.buscarMarca', $marca->id) }}">{{ $marca->nombre }}</a></li>
                        @endforeach
                        <li><a class="dropdown-item" href="{{ route('app.showTodosProductos') }}">Todos los productos</a></li>
                      
                    </ul>
                </div>
                <div class="dropdown  col-lg-2 text-center my-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Buscar por Categorías
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($categorias as $categoria)
                        <li><a class="dropdown-item" href="{{ route('app.buscarCategoria', $categoria->id) }}">{{ $categoria->nombre }}</a></li>
                        @endforeach
                        <li><a class="dropdown-item" href="{{ route('app.showTodosProductos') }}">Todos los productos</a></li>
                      
                    </ul>
                </div>
                {{-- <form action="" method="get">
                    <div class="input-group  col-lg-2">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar</span>
                        <input type="text" value="{{ request('search') }}" name="search" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="¿Qué desea buscar?">
                    </div>
                </form> --}}
            
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