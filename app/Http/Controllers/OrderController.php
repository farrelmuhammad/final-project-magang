<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    public function cart_pertama()
    {
        if (Auth::user()) {
            $user = Auth::user()->id;
            $cart = \App\orders::where('user_id',$user)->where('status','pending')->first();
            // dd($cart);
            return view('/cart1',compact('cart'));
        } else {
            return redirect('/login');
        }
    }
    public function cart_kedua()
    {
        $user = Auth::user()->id;
        $cart = \App\orders::where('user_id',$user)->where('status','pending')->first();
        return view('/cart2',compact('cart'));
    }
    public function cart_ketiga()
    {
        return view('/cart3');
    }
    public function cart_add(Request $request)
    {
        $order = new \App\orders;
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->status = $request->status;
        $order->start = $request->start;
        $order->end = $request->end;
        $order->created_at = $request->dates;
        $order->save();
        
        return redirect('/cart')->with('success', 'Order has been added');
    }
    public function update(Request $request, $user_id)
    {
        $cart = \App\orders::where('user_id',$user_id)->where('status','pending')->first();
        $cart->status = $request->status;
        $cart->save();

        $user = new \App\user_details;
        $user->user_id = $user_id;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/cart/3')->with('success', 'Product has been edited');
    }
    public function destroy($id)
    {
        $product = \App\orders::where('id',$id)->delete();
        return redirect('/cart')->with('success', 'Product has been deleted');
    }
}
