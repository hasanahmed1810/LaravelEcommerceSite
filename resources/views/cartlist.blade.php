<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}

?>
@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-12">
        <div class="trending-wrapper">
            @if($products->count() > 0)
            <h1 style="text-align: center;font-weight: bold;color: #002147;">My Cart</h1>
            @else
            <h1 style="text-align: center;font-weight: bold;color: #002147;">Your Cart is Empty</h1>
            @endif
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider" style="   display: flex;
    align-items: center;">
             <div class="col-sm-3">
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
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
            <div class="col-12 text-center">
          @if($total > 0)
            <a class="btn btn-large btn-success" style="width: 200px" href="ordernow">Order Now</a> <br> <br>
          @endif
        </div>
     </div>
</div>
@endsection 