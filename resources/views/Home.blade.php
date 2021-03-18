@extends('layouts.app')

@section('content')

<body class="landing">
    <!-- Banner -->
    <section id="banner">
        <h2>Hi. Welcome to the BookClub </h2>
        @if (Auth::check())
        <h2>{{ Auth::user()->name }}</h2>
        <p>You are logged in as {{ Auth::user()->type }} </p>
        @else
        <h3 style="color:azure">You are not logged in, Browse as Guest</h3>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @endif
        <hr>
        <ul class="actions">
            <li> <a href="{{url("/book")}}" class="button big">Explore Books</a> </li>
        </ul>
    </section>
</body>

@endsection