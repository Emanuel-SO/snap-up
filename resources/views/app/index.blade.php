@extends('layouts.app')
@section('content')
<section class="section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://placehold.jp/3d4070/ffffff/1920x850.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://placehold.jp/3d4070/ffffff/1920x850.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://placehold.jp/3d4070/ffffff/1920x850.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

<section class="section">
    <h2 class="h3 text-center py-5">
        Ofertas
    </h2>
    <div class="container">
        <div class="row m-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Opcion1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Opcion2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Opcion3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Opcion4</a>
                </li>
              </ul>
        </div>
        <div class="row">
            @foreach ($productos as $producto)
            <div class="col-lg-3 my-2">
                <div class="card" >
                    <img src="{{ asset('imagenes/productos_imagenes/'.$producto_imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $producto['nombre'] }}</h3>
                        <p class="card-text">{{ $producto['descripcion'] }}</p>
                        <p class="card-text">${{ $producto['precio'] }} mnx</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="card" >
                    <img src="http://placehold.jp/350x200.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
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