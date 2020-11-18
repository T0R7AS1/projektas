@extends('home')

@section('content')
<div class="container mt-5">
    <h3>Create</h3>
<form action="/posts/{{$post->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="form-group">
        <input type="text" class="form-control" id="title" placeholder="{{$post->title}}" name="title">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="aprasymas" placeholder="{{$post->aprasymas}}" name="aprasymas">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="specifikacija" placeholder="{{$post->specifikacija}}" name="specifikacija">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="moduliai" placeholder="{{$post->moduliai}}" name="moduliai">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="extra" placeholder="{{$post->extra}}" name="extra">
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  </div>
@endsection