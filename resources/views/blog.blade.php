<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Posts</title>
</head>
<body>
    <h1>Listado de Posts</h1>
    @foreach ($posts as $post)
    <p>
        <strong>{{ $post['id'] }}</strong>
        <!-- Añade la ruta dinámica al href usando el slug del post -->
        <a href="{{ url('blog/' . $post['slug']) }}">{{ $post['title'] }}</a>
    </p>
    @endforeach
</body>
</html>
