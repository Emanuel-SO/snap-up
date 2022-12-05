@extends('layouts.app')
@section('content')
<section class="section">
    {{-- <img class="img-fluid" src="https://placehold.jp/3d4070/ffffff/1920x350.png" alt="" srcset=""> --}}

    <h2 class="h2 p-5">
        Carrito
    </h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-12 ">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://placehold.jp/350x350.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <h2 class="h3 p-5 text-end">Subtotal (n producto):$</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Subtotal</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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