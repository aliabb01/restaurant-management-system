<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;


class Paymentcontroller extends Controller
{
   
    public function index()
    {
        return view('payment');
    }
}
