@extends('layouts.app')
@section('title')
Books
@endsection
@section('content')

<form method="POST" action='{{url("book/$book->id")}}'>
    {{csrf_field()}}
    {{ method_field('PUT') }}

    <p><label>Book Name: </label><input type="text" name="name" value="{{$book->name}}"></p>
    @if ($errors->has('name'))<p style="color:red;">{{ $errors->first('name') }}</p>
    @endif
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
    </p> @if ($errors->has('gener'))<p style="color:red;">{{ $errors->first('genera') }}</p>
    @endif
    <p><label>Author: </label><input type="text" name="author" value="{{$book->author}}"></p>
    @if ($errors->has('author'))<p style="color:red;">{{ $errors->first('author') }}</p>
    @endif
    <p><label>Year: </label><input type="number" name="year" value="{{ $book->year }}"></p>
    @if ($errors->has('year'))<p style="color:red;">{{ $errors->first('year') }}</p>
    @endif
    <p><label>author_first_name: </label><input type="text" name="author_first_name" value="{{ $book->author_first_name}}"></p>
    @if ($errors->has('author_first_name'))<p style="color:red;">{{ $errors->first('author_first_name') }}</p>
    @endif
    <p><label>author_last_name: </label><input type="text" name="author_last_name" value="{{$book->author_last_name }}"></p>
    @if ($errors->has('author_last_name'))<p style="color:red;">{{ $errors->first('author_last_name') }}</p>
    @endif
    <p><label>birthdate: </label><input type="date" name="birthdate" value="{{ $book->birthdate }}"></p>
    @if ($errors->has('birthdate'))<p style="color:red;">{{ $errors->first('birthdate') }}</p>
    @endif
    <p><label>Nationality: </label><input type="text" name="nationality" value="{{ $book->nationality}}"></p>
    @if ($errors->has('nationality'))<p style="color:red;">{{ $errors->first('nationality') }}</p>
    @endif

    </select>
    <input type="submit" value="Update">
</form>

@endsection