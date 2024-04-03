<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Post</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <form action="/posts/{{ $post->id }}" class="form-post" method="POST">

        @csrf
        @method('PATCH')

        <h2>Editar Post</h2>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label>Resumen</label>
            <textarea cols="30" rows="7" name="excerpt">{{ $post->excerpt }}</textarea>
        </div>
        <div class="form-group">
            <label>Contenido</label>
            <textarea cols="30" rows="7" name="content">{{ $post->content }}</textarea>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Actualizar">
        </div>
        <br>
        <a href="/posts/{{ $post->id }}">Regresar</a>
    </form>
</body>

</html>
