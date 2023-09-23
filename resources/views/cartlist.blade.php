@extends('master')
@section("content")

<div class="container custom-cartlist">
    <div class="row">
        <div class="col-sm-12">
            <div class="trending-wapper">
                <h3>Result for Products</h3>
                <a class="btn btn-success"href="ordernow">Order Now</a><br><br>
                @foreach ($products as $item)
                <div class="row cart-list-divider">
                    <div class="col-sm-3">
                        <div class="trending-item">
                            <a href="detail/{{$item->id}}">
                            <img class="tending-image" src="{{$item->gallery}}" >
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="trending-item">
                            <div class="">
                                <h4>{{$item->name}}</h4>
                                <h5>Rs.{{$item->price}}</h5>
                                <h6>{{$item->description}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a href="/removecart/{{$item->cart_id}}"class="btn btn-warning">Remove from Cart</a>
                    </div>
                    
                </div>
                @endforeach
                <a class="btn btn-success"href="ordernow">Order Now</a><br><br>
            </div>
        </div>
    </div>
</div>
@endsection