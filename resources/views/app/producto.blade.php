@extends('layouts.app')
@section('content')
<section class="section">
    <img class="img-fluid" src="https://placehold.jp/3d4070/ffffff/1920x350.png" alt="" srcset="">

</section>

<section class="section mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card" >
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="http://placehold.jp/350x200.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="http://placehold.jp/350x200.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="http://placehold.jp/350x200.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Producto Nombre</h5>
                        <p class="card-text">Marca</p>
                        <p class="card-text">Precio</p>
                        <p class="card-text">Stock</p>
                        <p class="card-text">devolucion?</p>
                        <p class="card-text">envio?</p>
                        <p class="card-text">Cantidad</p>
                        <a href="#" class="btn btn-primary">Comprar ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Descripción</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut architecto veniam quo, inventore neque possimus, quae harum nihil id consectetur aspernatur pariatur omnis numquam labore iure perferendis nulla quos aliquam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="section">
    <div class="container text-center">
        <h3 class="h3 p-5">Recomendados</h3>
        <div class="row">
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