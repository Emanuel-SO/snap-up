@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <form method="POST" action="{{ url('/dashboard/productos_imagenes/store/'.$producto->id) }}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="producto_imagen" class="col-md-4 col-form-label text-md-end">Imagen</label>
    
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
                                    Agregar Imagen
                                </button>
                            </div>
    
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection