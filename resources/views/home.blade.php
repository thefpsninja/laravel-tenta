@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{-- Only calling 1 variabel as i dont want all info to be loaded in to page for security
    instead of using ex: $user->name --}}
                    {{ $currentUserName }} are logged in! {{ $currentUserAge }}

                    @if ($currentUserAge < 18)
                    <h1> Age to low </h1>
                    @else 
                    <h1> Age is good</h1>
                    @endif

                </div> 
            </div>
            <div class="links">
                {{-- Woop Woop Lazy Programing --}}
                <br><br><br>
                <a href="/subreddits">Subreddits!</a>
            </div>
        </div>
    </div>
</div>
@endsection
