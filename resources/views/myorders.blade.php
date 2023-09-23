@extends('master')
@section("content")

<div class="container custom-cartlist">
    <div class="row">
        <div class="col-sm-12">
            <div class="trending-wapper">
                <h3>My Orders</h3>
                @foreach ($orders as $item)
                <div class="row cart-list-divider">
                    <div class="col-sm-3">
                        <div class="trending-item">
                            <a href="detail/{{$item->id}}">
                            <img class="tending-image" src="{{$item->gallery}}" >
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="trending-item">
                            <div class="">
                                <h4>Name : {{$item->name}}</h4>
                                <h6>Delivery : {{$item->status}}</h6>
                                <h6>Address : {{$item->address}}</h6>
                                <h6>Payment staus : {{$item->payment_status}}</h6>
                                <h6>payment method : {{$item->payment_method}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection