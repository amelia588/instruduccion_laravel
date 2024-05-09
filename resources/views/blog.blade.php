@extends('template')

@section('content')
 <h1>Listado de Posts</h1>
    @foreach ($posts as $post)
    <p>
        <strong>{{ $post['id'] }}</strong>
        <!-- Añade la ruta dinámica al href usando el slug del post -->
        <a href="{{ route('post',$post['slug']) }}">{{ $post['title'] }}</a>
    </p>
    @endforeach
@endsection
    