@extends('master')
@section('title', 'Homepage')

@section('content')
    Post a message:
    <form action="/create" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        <button type="submit">Submit</button>
    </form>

    Recent Messages:
    <ul>
        @foreach ($messages as $message)
            <li>
                <strong>{{ $message->title }}</strong> <br>
                {{ $message->content }}
            </li>
            <br>
            {{ $message->created_at->diffForHumans() }} 
            <br>

            <a href="/message/{{ $message->id }}">View</a>
            <a href="/">Home</a>
        @endforeach
    </ul>
@endsection