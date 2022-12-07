@extends('layouts.dashboard.master-dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row card-header py-3">
            <h2 class="col m-0 font-weight-bold text-primary">Marcas</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">{{-- agregar a este btn la funcion para agregar nuevos producstos --}}
                <a class="btn btn-success" href="{{ route('marcas.create') }}" role="button">Agregar</a>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <th scope="row">{{ $marca->id }}</th>
                            <td>{{ $marca->nombre }}</td>
                            <td class="d-flex">
                                <a class="btn btn-info mr-3" href="{{ route('marcas.edit', $marca->id) }}" role="button">Editar</a>
                                {{-- <a class="btn btn-danger" href="{{ route('marcas.destroy', [$marca->id]) }}" role="button">Eliminar</a> --}}
                                <form action="{{ route('marcas.destroy', $marca->id) }}" method="post">
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