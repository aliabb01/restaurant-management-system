<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use App\Review;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('delete_reviews');
    }
    public function index1()
    {
    $feeds = Feedback::all();
    return view ('feedback',['feeds'=> $feeds]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view ('feedback',compact('users'));
    }
    public function reprot()
    {
    $reports = Feedback::all();
    return view ('report',['reports '=> $reports ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feeds=new Feedback;
        $feeds->user_id=$request->input('user_id');
        $feeds->body=$request->input('body');
      //  $feeds->body=$request->input('body');
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   
      $feeds->save();
   // return ("save it");
      return redirect('feedback');
    
    }
    
    public function storereport(Request $request)
    {
        $reports=new Feedback;
        $reports->user_id=$request->input('user_id');
        $reports->body=$request->input('body');
      //  $feeds->body=$request->input('body');
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   
       $reports->save();
   // return ("save it");
      return redirect('report');
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
