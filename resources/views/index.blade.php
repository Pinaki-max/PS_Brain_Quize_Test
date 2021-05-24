@extends('layouts.master')
@section('title','Home')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>Home Page</h3>
        </div>
    </div>
       

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="622ddb63987528970c3b7cb65bfc6c43.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="622ddb63987528970c3b7cb65bfc6c43.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
        </div>
      </div>
      <div class="carousel-item">
        <img src="622ddb63987528970c3b7cb65bfc6c43.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          
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


  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
  
</div>


@endsection