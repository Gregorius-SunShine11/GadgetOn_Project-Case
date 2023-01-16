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

    public function index_search(Request $request){
        if($request->searchBar == null){
            return redirect()->route('index_home');
        }
        $Gadget = Gadget::where('name', 'LIKE', "%$request->searchBar%")->paginate(6);
        return view('product.search', compact('Gadget'));
    }

}
