@extends('layout')

@section('content')
    {{$name}}'s Tasks
    @foreach($tasks as $task)

        <li>{{$task}}</li>
    @endforeach
@endsection