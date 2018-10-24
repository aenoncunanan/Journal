{{-- Contains all blogs made by the user --}}

@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div>
        <h3>Developers:</h3>
        @if (count($developers) > 0)
            <ul>
                @foreach ($developers as $developer)
                    <li>
                        <p>{{$developer}}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>


@endsection