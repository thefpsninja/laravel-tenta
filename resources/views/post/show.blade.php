@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>This is a post</title>
    </head>
    <body>
        <h1>{{ $posts->title }}</h1>
        <h6>{{ $posts->content }}</h6>
        @if (Auth::id() == $posts->user_id)
            This is your post! "{{ Auth::user()->name }}"
        @endif
    </body>
    </html>
@endsection