@extends('master')
@section("content")
<div class="custom-product">
<div class="container pt-5">
        <div class="result-title text-center">
            <h2>Result for Products</h2>
      </div>
  <div class="row">
    @foreach($products as $item)
         <div class="col-md-4 mt-3 searched-item">  
			<div class="card">
                <a href="detail/{{$item['id']}}">
                    <img class="card-img-top " src="image/{{$item['gallery']}}" alt="Card image" style="width:100%"></a>
					<div class="card-body">
						<h4 class="card-title"><a href="detail/{{$item['id']}}">{{$item['name']}}</a></h4>
						<div class="detail mb-3">
							<p><b>Price:{{$item['price']}}</b></p>
				        </div>
			        </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
@endsection