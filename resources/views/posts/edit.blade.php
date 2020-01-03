<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form method="post" action="/posts/{{$postId}}">
  @csrf
  {{method_field('PUT')}}
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" value="{{ $idDetails->title }}" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <input type="text" value="{{ $idDetails->content }}" class="form-control" id="content" placeholder="Enter content" name="content">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
