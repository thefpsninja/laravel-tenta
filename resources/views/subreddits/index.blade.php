{{--  Här funkar CSS --}}
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memings: Subreddit</title>
</head>
<body>
<div class="links">
    <a href="subreddits/create">Create A Subreddit</a>
</div>
    @foreach ($subreddits as $subreddit)
    <a href="/subreddits/{{ $subreddit->slug }}" class="btn btn-light">
        <h1>{{ $subreddit->title }}</h1>
        <h5>{{ $subreddit->desc }}</h5>
        <h6>Created By "{{ $subreddit->user->name }}"</h6>
    </a>
    @endforeach
</body>
</html>
@endsection