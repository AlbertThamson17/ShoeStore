<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sepatu;
use App\Cart;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    //
    public function addCart($id, Request $request){
        $cart = new Cart;

        $Sepatu=  Sepatu::where('id',$id)->first();
        $cart->name = $Sepatu->name;
        $cart->description = $Sepatu->description;
        $cart->price = $Sepatu->price;
        $cart->image = $Sepatu->image;
        $cart->qty = $request->quantity;
        $cart->data_cust_id = Auth::user()->id;
        $cart->sepatu_id = $id;
        $cart->save();

        return redirect('/homePage');
    }
    public function editCart($id, Request $request){


        $cart=  Cart::where('id',$id)->first();

        $cart->qty = $request->quantity;

        $cart->save();

        return redirect('addCart');
    }

    public function view(){
        $cart = Cart::where('data_cust_id',auth()->user()->id)->get();

        return view('addCart')->with('cart',$cart);
    }

    public function detail($id){
        $cart = Cart::find($id);


        return view('editCart')->with('cart',$cart);
    }

    public function edit($id,Request $request){


        $edit = Cart::where('id',$id)->first();
        // $harga = Sepatu::where('id',$edit->sepatu_id)->first();
        // dd($harga);
        $edit->qty = $request->quantity;
        // $edit->price = ($harga->price*$request->quantity);
        $edit->save();
        return back();
    }

    public function addtoCart(Request $request){
        $cart = new  Cart();
        $cart->qty = $request->quantity;
        $cart->save();

        return redirect("homePage");

    }

    public function delete($id){
        $cart = Cart::where('id',$id)->first();
        $cart->delete();
        return redirect('addCart');

    }

    public function checkout(){
        $cart = Cart::where('data_cust_id',Auth::user()->id)->get();

        foreach($cart as $item){
            $tran = new Transaction();
            $tran->name = $item->name;
        $tran->description = $item->description;
        $tran->price = $item->price;
        $tran->image = $item->image;
        $tran->qty = $item->qty;
        $tran->data_cust_id = $item->data_cust_id;
        // $tran->qty = $item->quantity;
        $tran->save();
        }

        foreach($cart as $item){

        $item->delete();

        }

        return back();
    }
}
