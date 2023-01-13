<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index_home(){
        return view('home');
    }

    public function index_cart(){
        return view('order.cart');
    }
}
