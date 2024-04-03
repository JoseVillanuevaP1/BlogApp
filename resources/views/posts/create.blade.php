<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <form action="/posts" class="form-post" method="POST">
        @csrf
        <h2>Crear Post</h2>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label>Resumen</label>
            <textarea cols="30" rows="7" name="excerpt"></textarea>
        </div>
        <div class="form-group">
            <label>Contenido</label>
            <textarea cols="30" rows="7" name="content"></textarea>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>