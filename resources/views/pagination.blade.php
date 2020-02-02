<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="sergey.sepol@gmail.com">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
<div class="container">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">№</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->index +1 }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->e-mail }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    {{ $posts->links() }}
</div>
</body>
</html>
