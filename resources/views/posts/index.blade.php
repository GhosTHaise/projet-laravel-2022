@extends('layouts.wrapper')

@section('main-content')


@foreach ($posts as $post)
    <div class="card bg-danger text-white mt-4">
        <div class="card-body">
            <p class="card-text ">{{ $post->content }}</p>
        </div>
    </div>    
    @foreach ($post->comments as $comment)
        <div class="card mt-2 text-right bg-primary text-white">{{ $comment->commentaire }}</div>                
    @endforeach
@endforeach

@endsection