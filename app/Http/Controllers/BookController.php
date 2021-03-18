<?php

namespace App\Http\Controllers;
//This controller will define all the functionality for books and its attributes 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Author;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]); // This middleware is used for authentiction. 
    }

    public function index()
    {
        $books = Book::all(); // The index will extract data and pass that too view file
        return view('book.books')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create_book'); //This will pass create function will to view file
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // this code will extract data from form fields and store it the books table variables.
    {

        $this->validate($request, [ // validation for server side .
            'name' => 'required|max:255|unique:books',
            'gener' => 'required',
            'author' => 'required|max:255',
            'year' => 'required|between:1701,2020|numeric',
            'author_first_name' => 'required|alpha|max:50',
            'author_last_name' => 'required|alpha|max:50',
            'birthdate' => 'required|date',
            'nationality' => 'required|string',
            'image' => 'required',
        ]);
        $image_store = request()->file('image')->store('images', 'public'); // image
        $book = new Book();
        $book->name = $request->name;
        $book->geners = $request->gener;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->author_first_name = $request->author_first_name;
        $book->author_last_name = $request->author_last_name;
        $book->birthdate = $request->birthdate;
        $book->nationality = $request->nationality;
        $book->image = $image_store;
        $book->save();
        return redirect("book");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //shows the detals of the books with author details.
    {
        $book = Book::find($id);
        $reviews = DB::table('reviews')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->where('reviews.book_id', '=', $id)
            ->select('reviews.id', 'reviews.user_id', 'reviews.rating', 'reviews.feedback', 'reviews.updated_at', 'users.name')
            ->paginate(5);

        return view('book.detail')->with('book', $book)->with('reviews', $reviews); // returning book details with reviews for that book.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit')->with('book', $book); // will show the edit form f

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) /// below code will fetch all the old data for specific book id for correcting details.
    {
        $this->validate($request, [
            'name' => 'required|max:255|unique:books, name' . $id,
            'gener' => 'required|alpha',
            'author' => 'required|max:255',
            'year' => 'required|between:1700,2021|numeric',
            'author_first_name' => 'required|alpha|max:50',
            'author_last_name' => 'required|alpha|max:50',
            'birthdate' => 'required|date',
            'nationality' => 'required|string'
        ]);
        $book = Book::find($id);
        $book->name = $request->name;
        $book->geners = $request->gener;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->author_first_name = $request->author_first_name;
        $book->author_last_name = $request->author_last_name;
        $book->birthdate = $request->birthdate;
        $book->nationality = $request->nationality;
        $book->save();
        return redirect("book/$book->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect("book");
    }
}
