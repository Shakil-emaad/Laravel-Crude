<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function index()
    {
       // return DB::select("select * from users");
      // return User::all();
      //$collection = Http::get("https://reqres.in/api/users?page=1");
      $collection = User::all();
      return view('mdlhome',['collection'=>$collection]);

    }
}
