@extends('layouts.app')
@section('title')
Products
@endsection

@section('content')
<h1 class="p-3 mb-2 bg-primary text-white">Pending approval</h1>
<ul class="text-warning">
    @foreach ($users as $user)
    <li class="btn btn-light">
        <h4>{{$user->name}}</h4>
        <a href=' {{url("status/$user->id/edit")}}'><button method="POST" type="submit" name="submit" class="btn btn-primary">Approve</button></a>
    </li>
    <hr>
    @endforeach
</ul>

@endsection