@extends('master')
@section("content")
<div class=" custom-product">
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==7?'active':''}}">
        <img class="slider-img" src="{{$item['gallery']}}" >
        <div class="carousel-caption slider-text">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <div class="trending-wapper">
    <h3>Trending Products</h3>
    @foreach ($products as $item)
    <div class="trending-item">
      <img class="tending-image" src="{{$item['gallery']}}" >
      <div class="">
        <h5>{{$item['name']}}</h5>
      </div>
    </div>
    @endforeach
  </div>
  
</div>
@endsection