<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sepatu;
class GuestController extends Controller
{
    //
    public function viewGuest(){
        $barang = Sepatu::paginate(6);

        return view('guestHomePage')->with('barang',$barang);
    }
    public function detailGuest($id){
        $Sepatu = Sepatu::find($id);


        return view('GuestDetail')->with('Sepatu',$Sepatu);



    }
}
