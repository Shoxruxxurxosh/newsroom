@extends('layouts.layout')
@section('content')



<div class="card text-center">
    <div class="card-header">
        <img class="img-fluid w-10 h-10" width="300px" height="300px" src="{{asset('storage/'.$post->image)}}" style="object-fit: cover;">
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post->name}}</h5>
      <p class="card-text">{{$post->describtion}}</p>

    </div>
    <div class="card-footer text-muted" style="background-color: black">
        {{$post->created_at}}
    </div>
  </div>

  @endsection


