<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index_cart($id){
        $myCart = Cart::where('user_id','=',$id)->get();
        return view('order.cart', compact('myCart'));
    }

    public function add_product($userId, $gadgetId, Request $request){
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Cart::where([
            ['user_id', '=', $userId],
            ['gadget_id', '=', $gadgetId]
        ])->first();

        if($product != null){
            Cart::where([
                ['user_id', '=', $userId],
                ['gadget_id', '=', $gadgetId]
            ])->update([
                'quantity' => $product->quantity + $request->input('quantity')
            ]);
            return redirect()->route('index_cart', $userId);
        }

        Cart::create([
            'gadget_id' => $gadgetId,
            'user_id' => $userId,
            'quantity' => $request->input('quantity')
        ]);

        return redirect()->route('index_cart', $userId);
    }

    public function index_editQty($id){
        $myCart = Cart::where('id','=',$id)->first();
        return view('order.editQty', compact('myCart'));
    }

    public function update_qty($id,$userId, Request $request){
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        Cart::where('id', '=', $id)->update([
            'quantity' => $request->input('quantity')
        ]);
        return redirect()->route('index_cart', $userId);
    }

    public function remove_cart($id){
        Cart::where('id','=',$id)->delete();
        return redirect()->back();
    }


}
