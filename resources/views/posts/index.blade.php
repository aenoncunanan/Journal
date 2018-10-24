{{-- Contains all blogs made by all users --}}

@extends('layouts.app')

@section('content')
    <h1>Journals</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class = "well">
                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                <p>{{$post->body}}</p>
                <hr>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        
        {{$posts->links()}} {{--This is for the pagination made in controller--}}
    @else
        <p>No posts yet.</p>
        <button>Create a post</button>
    @endif

@endsection