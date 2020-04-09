{{-- Här funkar inte css t.ex --}}
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
            Title
            <input type="text" name="title">
            Content
            <input type="text" name="content">
            <input type="hidden" name="subreddits_id" value="{{ $subreddits->id }}">
            <input type="submit" value="">
    <div class="links">
        @foreach ($posts as $post)
        <a href="post/{{ $post->slug }}">{{ $post->title }}</a>
        @endforeach
    </div>

    </body>
    </html>
@endsection