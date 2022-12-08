@extends('layouts.app')
@section('content')
<section class="section">
    {{-- <img class="img-fluid" src="https://placehold.jp/3d4070/ffffff/1920x350.png" alt="" srcset=""> --}}
    
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Carrito</h1>
          </div>
        </div>
      </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if ($message = Session::get('success'))
                    <div class="p-4 mb-3 bg-green-400 rounded">
                        <p class="text-green-800">{{ $message }}</p>
                    </div>
                @endif
                <div class="col-12 ">

                    @foreach ($cartItems as $item)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                @if ($item->attributes->image)
                                    <img src="{{ asset('imagenes/productos_imagenes/'.$item->attributes->image) }}" class="img-fluid rounded-start" alt="...">
                                @else
                                    <img src="http://via.placeholder.com/350x350.png?text=No+Image" class="img-fluid rounded-start" alt="...">
                                @endif

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <div class="h-10 w-28">
                                        <div class="relative flex flex-row w-full h-8">
                                            
                                            <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                                class="w-6 text-center bg-gray-300" />
                                                <button type="submit" class="btn btn-warning ms-2">Actualizar</button>
                                            </form>
                                            
                                        </div>
                                    </div>
                                    <p class="card-text">Precio por uno: ${{ $item->price }}</p>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-danger ">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                    <h2 class="h3 p-5 text-end">Subtotal ({{ Cart::getTotalQuantity() }} producto(s)):${{ Cart::getTotal() }}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Total ${{ Cart::getTotal() }}</h5>
                          
                          <a href="#" class="btn btn-primary">Proceder al pago</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">

                </div>
            </div>
        </div>
    </div>
    
    
</section>
@endsection