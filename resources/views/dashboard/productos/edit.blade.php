@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card-body">
                    <div>
                        <h1>Editar Producto</h1>
                    </div>
                    <form method="POST" action="/dashboard/productos/{{ $producto->id }}">
                        @csrf
                        @method('PATCH')

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre de Producto</label>

                            <input id="nombre" 
                            type="text" 
                            class="form-control @error('nombre') is-invalid @enderror" 
                            name="nombre" 
                            value="{{ old('nombre') ?? $producto->nombre }}"  
                            autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripción del Producto</label>

                            <input id="descripcion" 
                            type="text" 
                            class="form-control @error('descripcion') is-invalid @enderror" 
                            name="descripcion" 
                            value="{{ old('descripcion') ?? $producto->descripcion }}"  
                            autocomplete="descripcion" autofocus>

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
                            value="{{ old('precio') ?? $producto->precio }}"  
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
                            value="{{ old('cantidad') ?? $producto->cantidad}}"  
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
                                
                                @if($producto->oferta == 1){
                                    <option selected value="{{ $producto->oferta }}">Activar</option>
                                    <option value="0">Desactivar</option>
                                }
                                @endif
                                @if($producto->oferta === 0){
                                    <option selected value="{{ $producto->oferta }}">Desactivar</option>
                                    <option value='1'>Activar</option>
                                }
                                @endif
                                
                                
                                
                            </select>

                            @error('oferta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mt-5 mb-5">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="categoria_id">Categoría Producto</label>
                            </div>
                            <select class="custom-select  @error('categoria') is-invalid @enderror" id="categoria_id"  name="categoria_id">
                                <option selected value="{{ $producto->categoria_id }}">
                                    {{$pCategoria->nombre}}
                                    </option>
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
                                <label class="input-group-text" for="marca_id">Marca Producto</label>
                            </div>
                            <select class="custom-select  @error('marca') is-invalid @enderror" id="marca_id" name="marca_id">
                                <option selected value="{{ $producto->marca_id }}">
                                    {{$pMarca->nombre}}
                                    </option>
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
                                Editar Producto
                            </button>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection