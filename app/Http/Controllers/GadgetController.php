<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GadgetController extends Controller
{
    //
    public function index_viewProduct($id){
        $Gadget = DB::table('gadgets')->where('id', $id)->first();
        return view('product.productDetail', compact('Gadget'));
    }
}
