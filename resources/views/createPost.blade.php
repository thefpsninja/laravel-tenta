@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memings: Create Post</title>
</head>
<body>
    <form action="/posts" method="POST">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="">
</form>
</body>
</html>
@endsection