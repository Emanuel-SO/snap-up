@extends('layouts.app')
@section('content')
<section class="section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://via.placeholder.com/1920x400.png?text=No+Image+1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://via.placeholder.com/1920x400.png?text=No+Image+2" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://via.placeholder.com/1920x400.png?text=No+Image+3" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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