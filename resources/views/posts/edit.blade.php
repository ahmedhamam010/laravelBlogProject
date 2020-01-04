@extends('layouts.app')
@section('content')
<div class="container">
  <form method="post" action="/posts/{{$postId}}">
  @csrf
  {{method_field('PUT')}}  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="form-group">
      <label for="title">title:</label>
      <input type="text"  value="{{ $idDetails->title }}" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <input type="text" value="{{ $idDetails->content }}" class="form-control" id="content" placeholder="Enter content" name="content">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection