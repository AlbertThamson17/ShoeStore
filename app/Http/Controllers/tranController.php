<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class tranController extends Controller
{
    //
    public function view(){

        $tran = Transaction::where('data_cust_id',auth()->user()->id)->get();

        return view('viewTransaction')->with('tran',$tran);

    }
    public function viewAdmin(){

        $tran = Transaction::all();

        return view('viewTransactionAdmin')->with('tran',$tran);

    }
}
