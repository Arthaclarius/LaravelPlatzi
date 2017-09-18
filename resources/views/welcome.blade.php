@extends('layouts.app')

@section('content')
    @forelse ($posts as $key => $post)
        <div class="post-container" id="post{{$post['id']}}">
            <h2>{{$post['title']}}</h2>
            <p>{{$post['message']}}</p>
        </div>
    @empty
        <div class="post-container">
            <h2>Sin Resultados que mostrar</h2>
        </div>
    @endforelse
@endsection
