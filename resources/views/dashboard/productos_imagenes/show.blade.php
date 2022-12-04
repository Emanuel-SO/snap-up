@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row card-header py-3">
            <h2 class="col m-0 font-weight-bold text-primary">Imagenes de {{ $producto->nombre }}</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success" href="{{ url('dashboard/productos_imagenes/create') }}" role="button">Agregar Imagen</a>
            </div>
        </div>
        
        <div class="container text-center">
          <div class="row justify-content-around">

            <div class="col-sm-8 col-md-6 col-xl-4 ">
              <div class="card my-3" style="width: 18rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="btn btn-warning">Editar</a>
                  <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
              </div>
            </div>

          </div>
        </div>
            
    </div>
@endsection 