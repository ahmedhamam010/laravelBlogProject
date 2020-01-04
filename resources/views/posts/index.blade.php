@extends('layouts.app')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="container">
<a class="btn btn-success" href="/posts/create"> Create Post </a>         
  <table class="table">
    <thead>
      <tr>
      <th>id</th>
        <th>title</th>
        <th>Slug</th>

        <th>content</th>
        <th>Created By</th>

        <th>created_at</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $posts as $index => $value )
    <tr>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['title'] }}</td>
        <td>{{ $value['slug'] }}</td>

        <td>{{ $value['content'] }}</td>
        <td>{{ $value->user->name }}</td>

        <td>{{ $value['created_at']->format('d/m/Y') }}</td>
        <td>
        <a class="btn btn-success" href="/posts/{{ $value['id'] }}">view</a>
        <a class="btn btn-primary" href="/posts/{{ $value['id'] }}/edit">edit</a>
        <form style="display: inline;" method="post" action="/posts/{{ $value['id'] }}">
        @csrf
        {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</button>
        </form>
        
        </td>
      </tr>
    @endforeach
     
    </tbody>
  </table>
</div>

@endsection


@section('footer')
    @parent

@endsection