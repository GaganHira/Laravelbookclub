@extends('layouts.app')
@section('title')
Book Details
@endsection

@section('content')

<div class="jumbotron">
    <h1 class="display-3">{{$book->name}}</h1>
    <p class="lead"> Gener - {{$book->geners}}</p>
    <hr class="my-4">
    <p>Author Birthdate - {{$book->birthdate}}</p>
    <p>Author Name - <h1>{{$book->author_first_name}} {{$book->author_last_name}}</h1>
    </p>
    <p class="lead">
        <img src="{{url("/storage/$book->image")}}" alt="Book's image" style="width:600px;height:300px;">
    </p>
</div>

<div>
    @if (Auth::check())
    @if(Auth::user()->status == "Approved")

    <h1><a href=' {{url("book/$book->id/edit")}}'>Edit</a></h1>
    <p>
        <form method="POST" action='{{url("book/$book->id")}}'>
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-primary btn-lg" value="Delete">
        </form>
    </p>
    @endif
    @endif
    <div class="container">
        @if(Auth::check())
        <h1 class="alert alert-dismissible alert-secondary">Add Your Review</h1><br>
        <div class="form-group">

            <form method="POST" action='{{url("review")}}'>
                {{csrf_field()}}
                <input type="hidden" name="uid" value="{{Auth::user()->id}}"><br>
                <input type="hidden" name="bid" value="{{$book->id}}"><br>

                <h4><label>Rating: </label> <input class="form-control" type="number" name="rating" required min="1" max="5"></h4> <br>

                <h2><label>ADD REVIEW</label></h4><br><textarea class="form-control" type="text" name="feedback" required></textarea><br></h2>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form> <br>
        </div><br>

        <hr>
        @endif
        </p>
        <hr>
        <h2 class="alert alert-dismissible alert-secondary">User's Reviews </h2>
        @if($reviews)
        @foreach($reviews as $review)

        <div class="position-static">
            <div class="col-md-2"></div>
            <div class="col-md-6 ">
                <div class="card-body">
                    <h2>Name: <strong>{{$review->name}} </h2></strong>
                    <h2>At: <strong> {{$review->updated_at}}/5 Stars</strong></h2>

                    <h2>Rating: <strong> {{$review->rating}}/5 Stars</strong> </h2>
                    <h2>Comment: <strong> --"{{$review->feedback}}"--</strong> </h2>
                    <hr>
                </div>
                @if (Auth::check())
                @if (Auth::user()->id == $review->user_id)
                <p><a href=' {{url("review/$review->id/edit")}}'>Edit</a></p>
                @endif
                @endif
            </div> <br><br>
            @endforeach
            {{$reviews->links()}}
            @else
            <!-- shows if no results -->
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                No Reviews yet
            </div> <br><br>
            @endif
        </div>
    </div>

</div>
@endsection