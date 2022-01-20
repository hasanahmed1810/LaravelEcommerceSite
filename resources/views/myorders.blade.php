@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-12">
        <div class="trending-wrapper">
            @if($orders->count() > 0)
            <h1 style="text-align: center; font-weight: bold; color: #002147;">My Orders</h1>
            @else
            <h1 style="text-align: center; font-weight: bold; color: #002147;">No Orders Made Yet</h1>
            @endif
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider" style="
    display: flex;
    align-items: center;
">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div style="border-left: 1px solid lightgray" class="col-sm-4">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment : ${{$item->price}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>

                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 