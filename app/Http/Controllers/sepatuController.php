<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Sepatu;
use Illuminate\Support\Facades\Auth;

class sepatuController extends Controller
{
    //
    public function view(){
        $barang = Sepatu::paginate(6);

        if(Auth::user()->posisi==0){
        return view('homePage')->with('barang',$barang);
        }
        else{
            return view('adminPage')->with('barang',$barang);
        }


    }

    public function detail($id, Request $request){
        $Sepatu = Sepatu::find($id);
        $cart = new Cart;
        $cart->qty = $request->quantity;

        return view('detailPage')->with('Sepatu',$Sepatu);



    }
    public function add(Request $request){
        // dd($request);
        $validation = request()->validate([
            'name' => 'required',
            'description' =>'required',
            'price' => 'required|min:100|numeric',
            'image' => 'required|image'
        ],

        [
            'name.required' => 'Nama tidak boleh kosong',

            'description.required' =>'Description tidak boleh kosong',

            'price.required' => 'Price tidak boleh kosong',
            'price.min:100' => 'Price tidak boleh kurang dari 100',

            'image.required' => 'Image tidak boleh kosong',
        ]
        );

        $images = $request->file('image');

            $tambahan = $images->getClientOriginalExtension();

            $namaGambar = time() . "." . $tambahan;

            $request->file('image')->storeAs('gambar', $namaGambar, 'public');
        $sepatu= new Sepatu;
        $sepatu->name = $request->name;
        $sepatu->description = $request->description;
        $sepatu->price = $request->price;
        $sepatu->image = $namaGambar;
        $sepatu->save();
        $barang = Sepatu::all();
        return view('addShoes')->with('barang',$barang);
    }
    public function search(Request $request){
        $search = Sepatu::where('name','like','%'.$request->search.'%')->paginate(6);

        return view('homePage')->with('barang', $search);
    }

    public function searchA(Request $request){
        $search = Sepatu::where('name','like','%'.$request->search.'%')->paginate(6);

        return view('adminPage')->with('barang', $search);
    }
    public function searchG(Request $request){
        $search = Sepatu::where('name','like','%'.$request->search.'%')->paginate(6);

        return view('guestHomePage')->with('barang', $search);
    }
}
