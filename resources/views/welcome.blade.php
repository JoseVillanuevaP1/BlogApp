<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Jose</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="container">

        @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->id}}">{{$post->title}}</a></h1>
            <p>{{$post->excerpt}}</p>
        </article>
        @endforeach

    </div>
    
</body>

</html>
