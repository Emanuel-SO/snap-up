@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <h1>Editar Categoría</h1>
                    </div>
                    <form method="POST" action="/dashboard/categorias/{{ $categoria->id }}">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre de Categoría</label>

                            <input id="nombre" 
                            type="text" 
                            class="form-control @error('nombre') is-invalid @enderror" 
                            name="nombre" 
                            value="{{ old('nombre') ?? $categoria->nombre }}"  
                            autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="row">
                            <button class="btn btn-primary">
                                Editar Categoría
                            </button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection