@extends('layouts.app')
@section('content')
<section class="section">
    <img class="img-fluid" src="https://placehold.jp/3d4070/ffffff/1920x350.png" alt="" srcset="">

    {{-- <h1>Productos</h1> --}}
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="dropdown m-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 px-3">
                <button class="btn btn-primary m-3">Opcion</button>
                <button class="btn btn-primary m-3">Opcion</button>
                <button class="btn btn-primary m-3">Opcion</button>
                <button class="btn btn-primary m-3">Opcion</button>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <div class="col col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection