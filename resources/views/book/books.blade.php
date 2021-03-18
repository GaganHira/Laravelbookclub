@extends('layouts.app')
@section('title')
Books
@endsection
@section('content')

<section id="main" class="wrapper">
    <div class="container">
        <header class="major">
            <h2>Books</h2>
            <p>A Short Description with book title & Author</p>
        </header>
        <a href="#" class="image fit"><img src="storage/images/b1.jpg" alt="Book" width="" height="300" /></a>
        <header>
            <ul class="alt">
                @foreach ($books as $book)
                <h3><a href="book/{{$book->id}}"></h3>
                <h2>
                    <li style="font-weight: bold">{{ $book->name }} written by {{$book->author}}</li>
                </h2>
                <hr></a>
                @endforeach
            </ul>
        </header>

    </div>
    <div>
        @if (Auth::check())
        @if(Auth::user()->status == "Approved" )
        <h1>CLick below to add new book</h1>
        <button class="btn btn-secondary btn-lg btn-block"><a href=' {{url("book/create")}}'>New Book</a></button>
        @endif
        @endif
    </div>
</section>


@endsection