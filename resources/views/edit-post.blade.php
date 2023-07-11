<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Úprava postu</title>
</head>
<body>
    <h1>Upravit post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST">
      @csrf
      @method('PUT')
      téma:
      <input type="text" name="title" value="{{$post->title}}">
      obsah:
      <textarea name="body">{{$post->body}}</textarea>
      barva:
      <input type="text" name="color" value="{{$post->color}}">
      <button>Uložit změny</button>
    </form>
  </body>
</html>
