@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
  <form method="post" action="/posts">
  @csrf
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="content">Password:</label>
      <input type="text" class="form-control" id="content" placeholder="Enter content" name="content">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection