@extends('layouts.app')
@section('title')
Adding New Book
@endsection

@section('content')

<div class="jumbotron">
    <h1 class="display-3">Add a New Book Details</h1>

</div>


<div class="container">
    <div class="form-group">
        <form method="POST" action='{{url("book")}}' enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <p><label class="form-group">Book Name: </label><input class="form-control" type="text" name="name" value="{{old('name')}}"></p>
                @if ($errors->has('name'))<p style="color:red;">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <p>
                <div class="form-group">
                    <label for="gener">Gener</label>
                    <select class="form-control" id="gener" name="gener">
                        <option disabled selected="">Choose gener</option>
                        <option value="Romantic" @if (old('gener')=="Romantic" ) {{ 'selected' }} @endif>Romantic</option>
                        <option value="Bio" @if (old('gener')=="Bio" ) {{ 'selected' }} @endif>Bio</option>
                        <option value="Thriller" @if (old('gener')=="Thriller" ) {{ 'selected' }} @endif>Thriller</option>
                        <option value="Science" @if (old('gener')=="Science" ) {{ 'selected' }} @endif>Science</option>
                    </select>
                    @if ($errors->has('gener'))<p style="color:red;">{{ $errors->first('gener') }}</p>
                    @endif
            </p>
            <p><label>Author: </label><input class="form-control" type="text" name="author" value="{{ old('author') }}"></p>
            @if ($errors->has('author'))<p style="color:red;">{{ $errors->first('author') }}</p>
            @endif
            <p><label>Year: </label><input class="form-control" type="number" name="year" value="{{ old('year') }}"></p>
            @if ($errors->has('year'))<p style="color:red;">{{ $errors->first('year') }}</p>
            @endif
            <p><label>author_first_name: </label><input class="form-control" type="text" name="author_first_name" value="{{ old('author_first_name') }}"></p>
            @if ($errors->has('author_first_name'))<p style="color:red;">{{ $errors->first('author_first_name') }}</p>
            @endif
            <p><label>author_last_name: </label><input class="form-control" type="text" name="author_last_name" value="{{ old('author_last_name') }}"></p>
            @if ($errors->has('author_last_name'))<p style="color:red;">{{ $errors->first('author_last_name') }}</p>
            @endif
            <p><label>birthdate: </label><input class="form-control" type="date" name="birthdate" value="{{ old('birthdate') }}"></p>
            @if ($errors->has('birthdate'))<p style="color:red;">{{ $errors->first('birthdate') }}</p>
            @endif
            <p><label>Nationality: </label><input class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"></p>
            @if ($errors->has('nationality'))<p style="color:red;">{{ $errors->first('nationality') }}</p>
            @endif
            <p><label>Image: </label> <br><input type="file" name="image"></p>

            <input type="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
</div>


@endsection