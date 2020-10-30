<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;


class Paymentcontroller extends Controller
{
    public function history()
    {
        return view('history');
    }
    public function index()
    {
        return view('payment');
    }
}
