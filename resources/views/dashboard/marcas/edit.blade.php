@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <h1>Editar Marca</h1>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">{{-- agregar a este btn la funcion para agregar nuevos producstos --}}
                            <a class="btn btn-success" href="{{ route('marcas.index') }}" role="button">Regresar a Marcas</a>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('marcas.update', $marca->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre de Marca</label>

                            <input id="nombre" 
                            type="text" 
                            class="form-control @error('nombre') is-invalid @enderror" 
                            name="nombre" 
                            value="{{ old('nombre') ?? $marca->nombre }}"  
                            autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="row">
                            <button class="btn btn-primary">
                                Editar Marca
                            </button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection