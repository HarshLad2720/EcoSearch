<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.adminUser',compact("users"));
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }

    public function storeTeam(Request $request)
    {
        $request->validate([
            'member_name'        => 'required',
            'member_email'       => 'required',
            'member_designation' => 'required',
        ]);

        $teamDetails = new Teams();
        $teamDetails->member_name        = $request->member_name;
        $teamDetails->member_email       = $request->member_email;
        $teamDetails->member_designation = $request->member_designation;
        $memberImage                     = $request->member_image;
        $imageName                       = time().'.'.$memberImage->getClientOriginalExtension();
        $request->member_image->move('teamImage',$imageName);
        $teamDetails->member_image       = $imageName ;

        $teamDetails->save();
//        return response()->json(['message'=>'Team Member Added Successfully..']);
        return redirect()->back();
    }
}
