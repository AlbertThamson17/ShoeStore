<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sepatu;
class updateController extends Controller
{
    //
    public function view(){
        $barang = Sepatu::all();
        return view('updatePage')->with('barang',$barang);
    }
    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'description' =>'required',
            'price' => 'required|min:100|numeric',
            'image' => 'image'
        ]);
        $Sepatu=  Sepatu::find($id);
        if(!$request->file('image')){

            $namaGambar= $Sepatu->image;

        }
        else{


        $images = $request->file('image');

            $tambahan = $images->getClientOriginalExtension();

            $namaGambar = time() . "." . $tambahan;

            $request->file('image')->storeAs('gambar', $namaGambar, 'public');
        }

        $Sepatu->name = $request->name;
        $Sepatu->description = $request->description;
        $Sepatu->price = $request->price;
        $Sepatu->image = $namaGambar;
        $Sepatu->save();
        $Sepatu = Sepatu::all();
        return redirect('/adminPage')->with('Sepatu',$Sepatu);
    }

    public function detail($id){

        $Sepatu = Sepatu::find($id);


        return view('updatePage')->with('Sepatu',$Sepatu);



    }
}
