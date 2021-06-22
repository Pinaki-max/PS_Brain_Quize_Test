@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>Home Page</h3>
            </div>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container mt-5">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4">
                <div class="col">
                    <div class="bg-light border border-4 rounded text-center shadow-sm p-2">
                        <h2><i class="fas fa-home"></i>Column 1</h2>
                        <p>Some text..</p>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light border border-4 rounded text-center shadow-sm p-2">
                        <h2><i class="fas fa-home"></i>Column 1</h2>
                        <p>Some text..</p>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light border border-4- rounded text-center shadow-sm p-2">
                        <h2><i class="fas fa-home"></i>Column 1</h2>
                        <p>Some text..</p>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-light border- border-4- rounded text-center shadow-sm p-2">
                        <h2><i class="fas fa-home"></i>Column 1</h2>
                        <p>Some text..</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
              <div class="col">
                <div class="p-3 border bg-light">Row column</div>
              </div>
            </div>
          </div>

    </div>
    
@endsection
