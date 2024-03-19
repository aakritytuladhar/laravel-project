@extends('master')
@section("content")
<div class="custom-product">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($banners as $item)
        <div class="carousel-item text-center {{$item['id']==1 ?'active':''}}">
        <img src="image/{{$item['gallery']}}" class="slider-img mx-auto" alt="hello">
        <div class="carousel-caption slider-text">
            <h3>{{$item['name']}}</h3>
        </div>
    </div>
    @endforeach
  </div>
</div>
<div class="container pt-5">
<div class="title">
    <h2 style="text-align:center">Occasion</h2>
  </div>
  <div class="row">
    @foreach($homes as $item)
         <div class="col-md-4 mt-3">  
				<div class="card">
        <a href="/specproduct/{{$item->id}}"><img class="card-img-top " src="image/{{$item['h_gallery']}}" alt="Card image" style="width:100%"></a>
					<div class="card-body">
						<h4 class="card-title"> <a href="/specproduct/{{$item->id}}">{{$item['h_name']}}</a></h4>
						<div class="detail mb-3">
							<p>{{$item['h_description']}}</p>
				</div>
			</div>
    </div>
</div>
    @endforeach
</div>
</div>
@endsection