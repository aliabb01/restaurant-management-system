<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
    return view ('order-reviews',['reviews'=> $reviews]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviews = Review::all();
    return view ('/delete_reviews',['reviews'=> $reviews]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reviews=new  Review;
        $reviews->user_id=$request->input('user_id');
        $reviews->body=$request->input('body');
        $reviews->quality=$request->input('quality');
      //  $feeds->body=$request->input('body');
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   
       $reviews->save();
   // return ("save it");
      return redirect('history');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $review)
    {
        $reviews = Review::findOrFail($review);
        return view('delete')->with('reviews', $reviews);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($review)
    {
        $reviews = Review::find( $review);
        $reviews->delete();
        return redirect('dashboard');
    }
}
