@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Registerd users</h2>
    <ul>
        @foreach ($users as $user)
        <li> {{ $user->name }} - {{ $user->email }} <br></li>
        @endforeach
    </ul>
</div>
@endsection