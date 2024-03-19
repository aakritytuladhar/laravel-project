@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img  class="detail-img" src="../image/{{$products['gallery']}}" >
    </div>
    <div class="col-sm-8">
            <h2  class="font-weight-bold mb-3">{{$products['name']}}</h2>
            <h5 class="price mb-3">Price: {{$products['price']}}</h5>
            <h4>Details:</h4>
			<h5><p>{{$products['description']}}</p></h5>
            <h4>Category:</h4>
			<h5><p>{{$products['category']}}</p></h5>
            <br></br>
            <form action="/add_to_cart" method="post">
                @csrf
            <input type="hidden" name="product_id" value={{$products['id']}}>
            <button class="btn btn-warning">Add To Cart</button>
            </form>
            <form action="ordernow" method="post">
                @csrf
            
            <button class="btn btn-info">Gift Now</button>
            </form>
			<div class="text-right">
			    <a href="/home" class="btn btn-light"> Go Back </a>
			</div>
        </div>
</div>
@endsection