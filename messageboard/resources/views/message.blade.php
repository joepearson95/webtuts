@extends('master')
@section('title', $message->title)

@section('content')
    <h3>{{ $message->title }}</h3>
    <p>
        {{ $message->content }}
        <a href="/">Home</a>
    </p>
@endsection