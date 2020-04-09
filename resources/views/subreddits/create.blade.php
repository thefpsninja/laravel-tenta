{{-- Här funkar inte css t.ex --}}
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memings: Create A Subreddit</title>
</head>
<body>
    <form action="/subreddits" method="POST">
        @csrf
        Title
        <input type="text" name="title">
        Description
        <input type="text" name="desc">
        <input type="submit" value="">
</body>
</html>
@endsection