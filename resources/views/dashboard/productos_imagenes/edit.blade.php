@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row card-header py-3">
            <h2 class="col m-0 font-weight-bold text-primary">Cambiar Imagen</h2>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <form method="POST" action="{{ route('productos_imagenes.update',$producto_imagen->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label for="producto_imagen" class="col-md-4 col-form-label text-md-end">Agregar Nueva Imagen</label>
    
                                <input id="producto_imagen" 
                                type="file" 
                                class="form-control-file @error('producto_imagen') is-invalid @enderror" 
                                name="producto_imagen" 
                                value="{{ old('producto_imagen') }}"  
                                autocomplete="producto_imagen" autofocus>
    
                                @error('producto_imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
    
                            <div class="row">
                                <button class="btn btn-primary">
                                    Cambiar Imagen
                                </button>
                            </div>
    
                            
                        </form>
                        <div class="container text-center">
                            <div class="row justify-content-around">
                  
                                
                              <div class="col-sm-8 col-md-6 col-xl-4 ">
                                <div class="card my-3" style="width: 18rem;">
                                  <img src="{{ asset('imagenes/productos_imagenes/'.$producto_imagen->producto_imagen) }}" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h1>Imagen Anterior</h1>
                                  </div>
                                </div>
                              </div>
                  
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection