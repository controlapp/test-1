@extends('layout ')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item" aria-current="page">Productos</li>
	    <li class="breadcrumb-item active" aria-current="page">{{$producto['path']}}</li>
	  </ol>
	<div class="card mb-3" >
		<div style="text-align: center;" class="col-lg-12">
	  		<img src="{{$producto['image']}}" class="card-img-top image-grande" >
	  	</div>
	  <div class="card-body">
	    <h5 class="card-title">{{$producto['title']}} </h5>
	    <p class="card-text">{{$producto['longDescription']}}</p>
	    <p class="card-text"><small class="text-muted"></small></p>
	  </div>
	</div>
@endsection