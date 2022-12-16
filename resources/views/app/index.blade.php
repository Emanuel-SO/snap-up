@extends('layouts.app')
@section('content')
<section class="section">
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <img class="d-block mx-auto mb-4" src="{{ asset('images\icons\artstation192.png') }}" alt="" width="72" height="57">
    <h1 class="display-4 fw-bold">Bienvenidos</h1>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        
              
         
            @if (auth()->user())
              <a href="{{ route('login') }}" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Ir Dashboard</a>
            @else
              <a href="{{ route('login') }}" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Ingresar</a>
              <a href="{{ route('register') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Registrarse</a>

            @endif   

        
         
        
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="{{ asset('img\imagen_tienda.jpg') }}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="1200" height="500" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="section">
    <h2 class="h3 text-center py-5">
        Ofertas
    </h2>
    <div class="container">
      
        <div class="row mb-3">
            <div class="text-center">

                <div class="dropdown d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categorías
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('app.index') }}">Todos los productos</a></li>
                      @foreach ($categorias as $categoria)
                        <li><a class="dropdown-item" href="{{ route('app.ofertas', $categoria->id) }}">{{ $categoria->nombre }}</a></li>
                      @endforeach 
                    </ul>
                </div>

                
            </div>
        </div>
      
        <div>
          <div class="d-flex justify-content-center">
              {!! $productos->links() !!}
          </div>
          <div class="row">
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
       
        
    </div>
</section>
@endsection