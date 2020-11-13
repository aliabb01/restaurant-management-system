<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Dish;
use App\Dish_Category;
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
        $dishcategories = Dish_Category::all();
      
   
       /// return view('dish.create',['dishcategories'=>$dishcategories]);
     return view('dish.create',compact('dishcategories'));
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
        $dishes->Description=$request->input('Description');
        $dishes->Price=$request->input('Price');
        $dishes->Calorie=$request->input('Calorie');
        $dishes->image=$request->input('image');
        $dishes->Category_name=$request->input('Category_name');
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
        $dishes->save();
    // return ("save it");
       return redirect('dish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $dish)
    {
        $dishes=Dish::findOrFail($dish);
        return view('dish.delete')->with('dishes',$dishes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $dish)
    {
         $dishes=Dish::findOrFail($dish);
        return view('dish.edit')->with('dishes',$dishes);
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
      
     ///   $cities = city::findOrFail($city);
$request->validate([
    'id'=> 'required',
    'title'=> 'required',
    'Description'=> 'required',
    'Price'=> 'required',
    'Category_name'=> 'required'
]);
     //   $cities->update($request->all());
      $cit=Dish::find($dish);
     // $cities=city::all();
       $cit->id=$request['id'];
       $cit->title=$request['title'];
       $cit->Description=$request['Description'];
       $cit->Price=$request['Price'];
       $cit->Category_name=$request['Category_name'];
    //   DB::update('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
 $cit->save();
   //
       //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   ///   $cities->save();
        //city::insert('inset into city(id,city_name,zip_code,description,distance) value(?,?,?,?,?)',[$id,$city_name,$zip_code,$description,$distance]);
   // $cities->save();

  
       return redirect('dish');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy( $dish)
    {
        $dishes=Dish::find($dish);
        $dishes->delete();
            return redirect('dish');
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
