@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row card-header py-3">
            <h2 class="col m-0 font-weight-bold text-primary">Categorías</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">{{-- agregar a este btn la funcion para agregar nuevos producstos --}}
                <a class="btn btn-success" href="{{ route('categorias.create') }}" role="button">Agregar</a>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Categoría</th>
                      <th scope="col">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <th scope="row">{{ $categoria->id }}</th>
                            <td>{{ $categoria->nombre }}</td>
                            <td class="d-flex">
                                <a class="btn btn-info mr-3" href="{{ route('categorias.edit', $categoria->id) }}" role="button">Editar</a>
                                {{-- <a class="btn btn-danger" href="{{ route('marcas.destroy', [$marca->id]) }}" role="button">Eliminar</a> --}}
                                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
            </table>
          </div>
    </div>
@endsection 