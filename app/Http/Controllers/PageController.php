<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadget;

class PageController extends Controller
{
    public function index_home(){
        $Gadget = Gadget::all();
        return view('home', compact('Gadget'));
    }

    public function index_cart(){
        return view('order.cart');
    }
}
