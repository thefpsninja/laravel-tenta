@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $subreddits->title }}</title>
    </head>
    <body>
        Welcome to "{{ $subreddits->title }}"
        Create a post
        <form action="/posts" method="POST">
            @csrf
            <input type="text" name="title">
            <input type="hidden" name="subreddits_id" value="{{ $subreddits->id }}">
            <input type="submit" value="">
        @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
        <h2>{{ $post->slug }}</h2>
        @endforeach

    </body>
    </html>
@endsection