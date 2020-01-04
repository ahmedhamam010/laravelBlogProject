@extends('layouts.app')
@section('content')
<div class="container">
<h1>View Post</h1>       
  <table class="table">
    <thead>
      <tr>
      <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>created_at</th>
        <th>updated_at</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $posts->id }}</td>
        <td>{{ $posts->title }}</td>
        <td>{{ $posts->content }}</td>
        <td>{{ $posts->created_at }}</td>
        <td>{{ $posts->updated_at }}</td>

      </tr>
     
    </tbody>
  </table>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Registered At</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $posts->user->name }}</td>
        <td>{{ $posts->user->email }}</td>
        <td>{{ $posts->user->created_at }}</td>

      </tr>
     
    </tbody>
  </table>
</div>
@endsection