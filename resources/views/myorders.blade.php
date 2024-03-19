@extends('master')
@section("content")
<div class="custom-product pt-5">
  <div class="col-sm-10">
      <div class="cart-item">
          <h4>My Orders<h4>
          @foreach($orders as $item)
          <div class="row searched-item cart-divider">
          <div class="col-sm-5 mt-3">
          <a href="detail/{{$item->id}}"><img class="cart-img " src="image/{{$item->gallery}}" alt="Cart image" style="width:60%"></a>
            </div>
            <div class="col-sm-5 mt-3">
                <div class="info mb-3">
                  <p><h2>Name:{{$item->name}}<h2></p>
                  <h5><p>Delivery Status:{{$item->status}}</p>
                  <p>Address:{{$item->address}}</p>
                  <p>Payment Status:{{$item->payment_status}}</p>
                  <p>Payment Method:{{$item->payment_method}}</p></h5>
                  <!-- <a href="/removecart/{{$item->id}}" class="btn btn-danger">Remove</a> -->
                 </div>
            </div>
          </div>
          @endforeach
      </div>
  </div>
</div>
@endsection