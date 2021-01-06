<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registerController extends Controller
{
    //
    public function add(Request $request){
        //dd(request('username'));

        $validation = request()->validate([
        'username' => 'required',
        'email' =>'required|unique:App\Cust,email|email:rfc,dns',
        'password' => 'required|min:3',
        'confPassword' => 'required|same:password'

        ],

        [
            'username.required' => 'Username tidak boleh kosong',

            'email.required' =>'Email tidak boleh kosong',
            'email.unique:App\Cust,email' =>'Email ini sudah digunakan',

            'password.required' => 'Password tidak boleh kosong',
            'password.min:3' => 'Panjang Password tidak boleh kurang dari 3',

            'confPassword.required' => 'Confirm Password tidak boleh kosong',
            'confPassword.same' => 'Confirm Password harus sama dengan password',
        ]
    );



        $data= new User;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $data->posisi = 0;
        $data->save();
        return redirect('/loginPage');


    }
}
