@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <h1>Agregar Nuevo Producto</h1>
                    </div>
                    <form method="POST" action="{{ route('productos.index') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre de Producto</label>

                            <input id="nombre" 
                            type="text" 
                            class="form-control @error('nombre') is-invalid @enderror" 
                            name="nombre" 
                            value="{{ old('nombre') }}"  
                            autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-floating mb-3">
                            <label for="descripcion">Descripción del Producto</label>
                            <textarea class="form-control @error('descripcion') is-invalid @enderror"
                              
                             id="descripcion"
                             name="descripcion"   
                             autocomplete="descripcion" autofocus></textarea>

                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="precio" class="col-md-4 col-form-label text-md-end">Precio del Producto</label>

                            <input id="precio" 
                            type="number" 
                            step="any"
                            min="0"
                            max="9999"
                            class="form-control @error('precio') is-invalid @enderror" 
                            name="precio" 
                            value="{{ old('precio') }}"  
                            autocomplete="precio" autofocus>

                            @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        <div class="row mb-3">
                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">Cantidad de Productos</label>

                            <input id="cantidad" 
                            type="number"
                            min="0"
                            max="9999" 
                            class="form-control @error('cantidad') is-invalid @enderror" 
                            name="cantidad" 
                            value="{{ old('cantidad') }}"  
                            autocomplete="cantidad" autofocus>

                            @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        

                        <div class="input-group mt-5 mb-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="oferta">Oferta Producto</label>
                            </div>
                            <select class="custom-select  @error('oferta') is-invalid @enderror" id="oferta"  name="oferta">
                                <option selected>Seleccionar una opcion...</option>
                                <option value='1'>Activar</option>
                                <option value="0">Desactivar</option>
                            </select>

                            @error('oferta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mt-5 mb-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="categoria">Categoría Producto</label>
                            </div>
                            <select class="custom-select  @error('categoria') is-invalid @enderror" id="categoria"  name="categoria">
                                <option selected>Seleccionar una Categoría...</option>
                                {{-- poner ciclo de cate --}}
                                @foreach ($categorias as $categoria )
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>

                            @error('categoria')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mt-5 mb-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="marca">Marca Producto</label>
                            </div>
                            <select class="custom-select  @error('marca') is-invalid @enderror" id="marca" name="marca">
                                <option selected>Seleccionar una Marca...</option>
                                {{-- poner ciclo de cate --}}
                                @foreach ($marcas as $marca )
                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>

                            @error('marca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        

                        <div class="row">
                            <button class="btn btn-primary">
                                Agregar Producto
                            </button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection