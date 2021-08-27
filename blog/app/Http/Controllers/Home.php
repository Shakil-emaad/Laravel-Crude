<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    function getData(Request $req)
    {
        // return "Form Data Here";
        $req->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required |min:5'
        ]);
        return $req->input();
    }
}
