<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

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
</div>

</body>
</html>
