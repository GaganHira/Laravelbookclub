<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all(); // showing all the reviews.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id(); //  authentication check if user is logged if not it will not let him save review but redirect to login page.
        if ($user) {
            $this->validate($request, [
                // 'uid' => 'required|unique:users',
                // 'bid' => 'required',
                'rating' => 'required|max:1|between:1,5',
                'feedback' => 'required',
            ]);
            $review = new Review();     // adding new entry in the database.
            $review->user_id = $request->uid;
            $review->book_id = $request->bid;
            $review->rating = $request->rating;
            $review->feedback = $request->feedback;
            $book = $request->bid;
            $review->save();
            return redirect("book/$review->book_id");
        } else {
            return redirect("login");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id); // reviewer can only add his/her own review !!
        $AID = Auth::id();
        return view('review.editreview')->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //when clicked on update it routes us here 
    {
        $this->validate($request, [
            'rating' => 'required|max:1|between:1,5',
            'feedback' => 'required|min:5',
        ]);
        $review = Review::find($id);   // fetching old values.
        $review->rating = $request->rating;
        $review->feedback = $request->feedback;
        $review->update(); // add new values  and update and save new values in store.
        return redirect("book/$review->book_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
