<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MembersController extends Controller
{
    //
    function show()
    {
        $data = member::paginate(5);
        return view('list',['members'=>$data]);
    }
    function addData(Request $req)
    {
       $member = new Member;
       $member->name=$req->name;
       $member->email=$req->email;
       $member->address=$req->address;
       $member->save();
       return redirect('add');
    }
    function delete($id)
    {
        $data = member::find($id);
        $data->delete();
        return back()->with('success','Item deleted successfully!');
        return redirect('list');
    }
    function showData($id)
    {
        $data = member::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        //return $req->input();
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }


    // Query Builder insert ,update , delete
    // function dbOpretions()
    // {
    //    return DB::table('members')->count();
    //    return DB::table('members')
    //    ->insert(
    //        [
    //        'name'=>'dhanga',
    //        'email'=>'dhanga@gmail.com',
    //        'address'=>'ahmd'
    //       ]
    //   );
       
    //   return DB::table('members')
    //   ->where('id',22)
    //   ->update(
    //       [
    //       'name'=>'dhanga',
    //       'email'=>'dhanga@gmail.com',
    //       'address'=>'srt'
    //      ]
    //  );

    //  return DB::table('members')
    //   ->where('id',22)
    //   ->delete();
    // }
}

