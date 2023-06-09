@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">    
        <div class="trending-wrapper">
            <h3>Shop Cart</h3>
                @foreach($products as $item)
                <div class=" row searched-item cart-list-devider">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">   
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class=""> 
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>   
                    </div>
                    <div class="col-sm-4">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
                    </div>
                </div>
                @endforeach        
        </div>
    </div>    
</div>
@endsection