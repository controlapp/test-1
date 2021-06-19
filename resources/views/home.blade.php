@extends('layout')

@section('content')
<div id="content">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Home</li>
	  </ol>
	<section>
		<div class="row col-lg-12">
			@foreach($productos as $producto)
				<div class="card col-lg-5 m-3">
				  <div class="row">
				    <div class="col-md-4">
				      <a href="{{route('test.producto',$producto['path'])}}"><img src="{{$producto['image']}}" class="image"></a>
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">{{$producto['title']}}</h5>
				        <p class="card-text">{{$producto['shortDescription']}}</p>
				        <p class="card-text"><small class="text-muted"><a href="{{route('test.producto',$producto['path'])}}">Leer mas...</a></small></p>
				      </div>
				    </div>
				  </div>
				</div>
			@endforeach

			<hr>
		</div>
	</section>
</div>
@endsection