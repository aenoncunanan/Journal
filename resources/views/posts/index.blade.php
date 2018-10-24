{{-- Contains all blogs made by the user --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1>Your Journals<h1>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                @foreach($posts as $post)
                                    <tr>
                                        <td><a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                            <hr>
                                            <small>Written on {{$post->created_at}}</small>
                                        </td>
                                        <td>   
                                            <a href="/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            {{$posts->links()}} {{--This is for the pagination made in controller--}}
                        @else
                            <p>No posts yet.</p>
                            <a href="/posts/create" class="btn btn-primary">Create a post</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection