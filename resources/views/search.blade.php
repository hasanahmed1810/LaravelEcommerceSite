@extends('master')
@section("content")
<div class="custom-product" style="height:1150px">
     
     <div class="col-12">
        <div class="trending-wrapper">
            @if($products->count() > 0)
            <h1 style="text-align: center;font-weight: bold; color: #002147; margin-bottom: 40px">Results</h1>
            @else
            <h1 style="text-align: center;font-weight: bold; color: #002147; margin-bottom: 40px">No Results Found</h1>
            @endif
            @foreach($products as $item)
            <div class="searched-item">
              <a href="detail/{{$item['id']}}" style="display: flex; margin-left: 80px ">
              <img class="trending-image" style="margin-right: 40px" src="{{$item['gallery']}}">
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>
              </div>
            </a>
            <hr style="border-color: lightgray">
            </div>
            @endforeach
            {{$products->links()}}
          </div>
     </div>
</div>
@endsection