<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function index()
    {
        return view('admin.teamList');
    }

    public function allList()
    {
        $teams = Teams::all();
        return view('admin.teamForm',compact('teams'));
    }

    public function store(Request $request)
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
        return redirect()->back();
    }

    public function destroy($id)
    {
        Teams::where('team_id',$id)->delete();
        return redirect()->back();

    }
}
