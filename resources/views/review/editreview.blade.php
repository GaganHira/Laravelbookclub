@extends('layouts.app')
@section('title')
Review Edition
@endsection

@section('content')


@if(Auth::check())
<h1>Edit Your Review</h1><br>
<div class="jumbotron">

    <form method="Post" action='{{url("review/$review->id")}}'>
        {{csrf_field()}}
        {{ method_field('PUT') }}

        <h4><label>Rating: </label> <input class="form-control" type="number" name="rating" required min="1" max="5" value="{{$review->rating}}"><label><strong> /5 </strong></label></h4> <br>

        <h4><label>ADD REVIEW</label></h4><br><textarea class="form-control" type="text" name="feedback" required>{{$review->feedback}}</textarea><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form> <br>
</div><br>

<hr>
@endif
</p>
<hr>

@endsection