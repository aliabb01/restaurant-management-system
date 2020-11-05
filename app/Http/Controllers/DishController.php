<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('dish.index',['dishes'=> $dishes]);
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
        $dishes=new Dish;
        $dishes->id=$request->input('id');
        $dishes->title=$request->input('title');
        $dishes->Price=$request->input('Price');
       
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
        $dishes->save();
    // return ("save it");
       return redirect('dash');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $dishes=Dish::find($dish);
     return view('dishinformation',compact('dishes','dish'));
    }
    public function edit1(Request $request, $dish)
    {
        $dishes=Dish::findOrFail($dish);
     return view('dishinformation')->with('dishes',$dishes);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $dish)
    {
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        //
    }
    public function add()
    {
        return view('show');
    }
    public function addToCart(Dish $dish) {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($dish);
        //dd($cart);
        session()->put('cart', $cart);
      return redirect('welcome')->with('success', 'Product was added');
       
    }
    public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('show', compact('cart'));
    }

    public function checkout($amount) {
    
            return view('/payment',compact('amount'));
    }
}
