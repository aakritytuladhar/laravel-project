@extends('master')
@section("content")
<div class="custom-product">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($banners as $item)
        <div class="carousel-item text-center {{$item->id==1 ?'active':''}}">
        <img src="../image/{{$item->gallery}}" class="slider-img mx-auto" alt="hello">
        <div class="carousel-caption slider-text">
            <h3>{{$item->name}}</h3>
        </div>
    </div>
    @endforeach
  </div>
</div>
<div class="container pt-5">
  <div class="row">
    @foreach($products as $item)
         <div class="col-md-4 mt-3">  
				<div class="card">
        <a href="../detail/{{$item->id}}"><img class="card-img-top " src="../image/{{$item->gallery}}" alt="Card image" style="width:100%"></a>
					<div class="card-body">
						<h4 class="card-title"><a href="../detail/{{$item->id}}">{{$item->name}}</a></h4>
						<div class="detail mb-3">
							<p><b>Price:{{$item->price}}</b></p>
				</div>
			</div>
    </div>
</div>
    @endforeach
</div>
</div>
@endsection