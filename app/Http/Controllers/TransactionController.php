<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function checkout($id){
        $myCart = Cart::where('user_id','=',$id)->get();
        $time = Carbon::now()->toDateTimeString();
        foreach($myCart as $order){
            Transaction::create([
                'gadget_id' => $order->gadget_id,
                'user_id' => $order->user_id,
                'quantity' => $order->quantity,
                'transaction_date' =>$time
            ]);
        }
        Cart::where('user_id','=',$id)->delete();

        return redirect()->route('index_transaction', Auth::user()->id);
    }

    public function index_transaction($id){
        $transaction = Transaction::where('user_id', '=', $id)->get();
        $purchasedOn = Transaction::where('user_id', '=', $id)->select('transaction_date')->distinct()->orderBy('transaction_date', 'DESC')->get();
        return view('order.transaction', compact('transaction', 'purchasedOn'));
    }
}
