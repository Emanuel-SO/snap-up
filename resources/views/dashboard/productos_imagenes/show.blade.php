@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row card-header py-3">
            <h2 class="col m-0 font-weight-bold text-primary">Imagenes de {{ $producto->nombre }}</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mr-3">
                <a class="btn btn-success" href="{{ route('productos_imagenes.create', $producto->id) }}" role="button">Agregar Imagen</a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-info" href="{{ route('productos.index') }}" role="button">Volver a productos</a>
          </div>
        </div>
        
        <div class="container text-center">
          <div class="row justify-content-around">

            @foreach ($producto->productimages as $producto_imagen )
              
            <div class="col-sm-8 col-md-6 col-xl-4 ">
              <div class="card my-3" style="width: 18rem;">
                <img src="{{ asset('imagenes/productos_imagenes/'.$producto_imagen->producto_imagen) }}" class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-around">
                  
                  <a href="{{ route('productos_imagenes.edit', $producto_imagen->id, $producto->id) }}" class="btn btn-warning mr-3">Editar</a>
                  <form action="{{ route('productos_imagenes.destroy', $producto_imagen->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                  </form>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
            
    </div>
@endsection 