<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class deleteController extends Controller
{
    //
    public function view(){
        $barang = Admin::all();
        return view('addShoes')->with('barang',$barang);
    }
    public function delete(Request $request, $id){
        $sepatu=  Admin::find($id);
        // Admin::delete($id);
        $sepatu->delete();
        $barang = Admin::all();
        return view('addShoes')->with('barang',$barang);
    }
}
