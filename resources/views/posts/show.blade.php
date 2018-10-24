@extends('layouts.app')

@section('content')
    <hr>
    <div class = "well">
        <h1>{{$post->title}}</h1>

        {{$post->body}}

        <hr>
        <small>Written by {{ucfirst(trans($post->user->name))}} on {{$post->created_at}}</small>
    </div>

    <hr>
    <a href="{{ url()->previous() }}" class = "btn btn-default">Back</a>
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection