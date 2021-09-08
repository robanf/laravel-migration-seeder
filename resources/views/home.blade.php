@extends('layout.app')
@section('title','home')
@section('content')
<div class="container">
    <div class="row">
     @foreach($viaggi as  $viaggio)
        <div class="col-4 my-3">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$viaggio['title']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$viaggio['location']}}</h6>
    <p class="card-text">{{$viaggio['description']}}</p>
    <p class="card-text">{{$viaggio['price']}}$</p>
  </div>
</div>
</div>
@endforeach
    </div>
</div>

@endsection