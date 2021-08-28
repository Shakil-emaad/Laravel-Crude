<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class Register extends Controller
{
    //
    function addData(Request $req)
    {
        $req->validate([
            'name' => 'required | max:10',
            'password' => 'required |min:5',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'hobby' => 'required'
        ]);
        $student = new Student;
        $student->name = $req->name;
        $student->email = $req->email;
        $student->address = $req->address;
        $student->password = Hash::make($req->password);
        $student->mobile = $req->mobile;
        $student->gender = $req->gender;
        $student->description = $req->description;
        $hobby = implode(', ', $req->hobby);
        $student->hobby = $hobby;

        if ($req->hasFile('image')) {
            $img_ext = $req->file('image')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $student->image = $filename;
            request()->image->move(public_path('profile_photo'), $filename);
            //$req->file('image')->store('profile_photo');
        }

        $student->save();
        //    return redirect('add');
        // return redirect('auth/login')->with('message', 'Registertion Successfully');
        return back()->with('message', 'Registertion Successfully');
        return redirect('auth/login');
    }
    function display_data()
    {
        $data = ['LoggedUserInfo'=>student::where('id','=', session('LoggedUser'))->first()];
        //$data = student::paginate(15);
        // return view('list', ['students' => $data]);
        return view('list',$data);
    }

    function showData($id)
    {
        $data = student::find($id);
        return view('edit', ['data' => $data]);
    }
    function update(Request $req)
    {
        //return $req->input();
        $data = student::find($req->id);

        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->password = Hash::make($req->password);
        $data->mobile = $req->mobile;
        $data->gender = $req->gender;
        $data->description = $req->description;
        $hobby = implode(', ', $req->hobby);
        $data->hobby = $hobby;

        if ($req->hasFile('image')) {

            $usersImage = public_path("profile_photo/{$data->image}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }

            $img_ext = $req->file('image')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $data->image = $filename;
            request()->image->move(public_path('profile_photo'), $filename);
            //$req->file('image')->store('profile_photo');
        }


        $data->save();
        return redirect('list')->with('message', 'Upadate Successfully');
        $data = ['LoggedUserInfo'=>student::where('id','=', session('LoggedUser'))->first()];
        return redirect('list');
    }
    function delete(Request $req ,$id)
    {
        
            
        $data = student::find($id);
        $usersImage = public_path("profile_photo/{$data->image}"); // get previous image from folder
            if (File::exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
        $data->delete();
        return back()->with('message', 'Data deleted successfully!');
        return redirect('list');
    }
}
