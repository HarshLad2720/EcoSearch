<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $userType = Auth::user()->usertype;

        if($userType == config('constants.admin_user.admin')) {
            return view('admin.adminHome');
        } else {
            return view('home');
        }
    }

    public function areas()
    {
        return view('construct.areas');
    }

    public function teams()
    {
        $teamMembers = Teams::all();
        return view('construct.teams',compact('teamMembers'));
    }

    public function candidates()
    {
        return view('construct.candidates');
    }

    public function contacts()
    {
        return view('construct.contactus');
    }
}
