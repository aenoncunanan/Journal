{{-- Contains all blogs made by the user --}}

@extends('layouts.app')

@section('content')
    {{-- <h1>{{$title}}</h1> --}}
    <h1>Your Journals<h1>

    @if (count($blogs) > 0)
        <ul class = "list-group">
            @foreach ($blogs as $blog)
                <li class = "list-group-item">
                    <h3>{{$blog}}</h3>
                </li>
            @endforeach
        </ul>
    @endif

@endsection