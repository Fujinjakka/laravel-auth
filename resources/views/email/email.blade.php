<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email di ritorno</title>
</head>
<body>
  <h1>email inviata correttamente</h1>
  <h2>{{$post->title}}</h2>
  <h2>{{$post->body}}</h2>
  <img src="{{$post->img_path}}" alt="img">
</body>
</html>