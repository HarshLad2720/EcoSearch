<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;


class ContactUsController extends Controller
{
    public function allContact()
    {
        $contacts = ContactUs::all();
        return view('construct.contactUsList',compact('contacts'));
    }

    public function store(Request $request)
    {
        $contactUs = new ContactUs();
        $contactUs->contact_name = $request->contact_name;
        $contactUs->contact_email = $request->contact_email;
        $contactUs->contact_subject = $request->contact_subject;
        $contactUs->contact_message = $request->contact_message;

        $contactUs->save();
        return response()->json(['success'=>'Your message has been sent. Thank you!']);
    }

    public function destroy($id)
    {
        ContactUs::where('contact_id',$id)->delete();
        return redirect()->back();

    }
}
