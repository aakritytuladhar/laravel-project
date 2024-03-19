@extends('master')
@section("content")
<div class="custom-product pt-5">
  <div class="col-sm-10">
      <div class="cart-item">
          <h4>Cart Products<h4>
          @foreach($products as $item)
          <div class="row searched-item cart-divider">
          <div class="col-sm-5 mt-3">
          <a href="detail/{{$item->id}}"><img class="cart-img " src="image/{{$item->gallery}}" alt="Cart image" style="width:60%"></a>
            </div>
            <div class="col-sm-5 mt-3">
                <div class="info mb-3">
                  <p>{{$item->name}}</p>
                  <p>Price:{{$item->price}}</p>
                  <p>Detail:{{$item->description}}</p>
                 </div>
              <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
            </div>
          </div>
          @endforeach
      </div>
      <a href="ordernow" class="btn btn-info">Gift Now</a>
  </div>
</div>
@endsection