<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    
    public function index ()
    {
        $members=\App\member::all();
        return view("memberindex",compact("members"));
    }

    public function edit($id)
    {
        $member = \App\member::find($id);
        return view('memberedit',compact('member','id'));
    }



    public function create()
    {
        return view("membercreate");   
    }


    public function store (Request $request)
    {
        $member = new \App\member;
        $member->membertype = $request->get("membertype");
        $member->department = $request->get("department");
        $member->groupname = $request->get("groupname");
        $member->save();
        return redirect ("/")->with("success" , "Data has been added");
    }

    public function update (Request $request,$id)
    { 
        $member = \App\member::find($id);
        $member->membertype = $request->get("membertype");
        $member->department = $request->get("department");
        $member->groupname = $request->get("groupname");
        $member->save();
        return redirect ("/")->with("success", "Member has been Updated");
    }

    public function destroy($id)
    {
        $member = \App\member::find($id);
        $member->delete();
        return redirect('member')->with('success','Member has been deleted');
    }


}


