@extends('layouts.app')
@section('content')


<section class="section mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" >
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          @forelse ($producto_imagenes as $producto_imagen)
                          <div class="carousel-item active">
                              <img src="{{ asset('imagenes/productos_imagenes/'.$producto_imagen->producto_imagen) }}" class="d-block w-100" alt="...">
                          </div>
                          @empty
                          <div class="carousel-item active">
                            <img src="http://via.placeholder.com/350x200.png?text=No+Image" class="d-block w-100" alt="...">
                        </div>
                          @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">Categoría - {{ $categoria->nombre }}</p>
                        <p class="card-text">Marca: {{ $marca->nombre }}</p>
                        <p class="card-text">${{ $producto->precio }} mnx</p>
                        <p class="card-text">Disponibles: {{ $producto->cantidad }}</p>
                        
                        <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" value="{{ $producto->id }}" name="id">
                            <input type="hidden" value="{{ $producto->nombre }}" name="name">
                            <input type="hidden" value="{{ $producto->precio }}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <input type="hidden" value="{{ $imagen }}" name="image">
                            
                            
                            <button class="btn btn-success mt-2">
                                Agregar a carrito
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Descripción</h5>
                        <p class="card-text">{{ $producto->descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="section">
    <div class="container">
        <h3 class="h3 p-5 text-center">Recomendados por que te gusta {{ $marca->nombre }}</h3>
        <div class="row">
            @foreach ($recomendados as $recomendado)     
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="http://via.placeholder.com/350x200.png?text=No+Image" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recomendado->nombre }}</h5>
                            <p class="card-text">${{ $recomendado->precio }} mnx</p>
                            <a href="{{ route('app.showProducto', $recomendado->id) }}" class="btn btn-primary">Ver Producto</a>
                        </div>
                    </div>
                </div>
            @endforeach

            
        </div>
    </div>
    
</section>
@endsection