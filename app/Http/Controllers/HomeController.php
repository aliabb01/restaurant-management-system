<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dish;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(session('success')){
            Alert::toast('Dish was added to cart', 'info');
        }

        if(session('success1')){
            Alert::toast('Paid successfully.check your email', 'success');
        }
       
        return view('welcome');
    }
    public function most()
    {
        $ladishes = Dish::orderBy('Calorie','desc')->take(2)->get();
       // $ladishes = DB::table('dishes')->orderBy('Calorie','desc')->take(1)->get();
        return view('most',compact('ladishes',$ladishes));
    }
   
}
