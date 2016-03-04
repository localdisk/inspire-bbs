@extends('layouts.default')

@section('content')
    <ul>
        @foreach($boards as $board)
            <li>{{ $board->name }}</li>
        @endforeach
    </ul>
@stop