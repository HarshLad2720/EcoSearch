<?php

namespace App\Http\Controllers;

use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index()
    {
        $candidates = Candidates::all();
        return view('construct.candidatesList',compact('candidates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_name'    => 'required | max:255',
            'address'           => 'required | max:255',
            'mobile_no'         => 'required | max:10',
            'candidate_email'   => 'required | max:255',
            'own_vehicle'       => 'required',
            'visa_status'       => 'required',
            'fin_name'          => 'required | max:255',
            'fin_mobile'        => 'required | max:10',
            'relationship_name' => 'required | max:255',
            'fin_address'       => 'required',
            'account_name'      => 'required | max:255',
            'institution'       => 'required | max:255',
            'account_number'    => 'required | max:16',
            'account_bsb'       => 'required | max:255',
        ]);

        $candidate = new Candidates();
        $candidate->candidate_name    = $request->candidate_name;
        $candidate->address           = $request->address;
        $candidate->city              = $request->city;
        $candidate->state             = $request->state;
        $candidate->zip_code          = $request->zip_code;
        $candidate->country           = $request->country;
        $candidate->mobile_no         = $request->mobile_no;
        $candidate->candidate_email   = $request->candidate_email;
        $candidate->tax_file_number   = $request->tax_file_number;
        $candidate->abn_number        = $request->abn_number;
        $candidate->own_vehicle       = $request->own_vehicle;
        $candidate->visa_status       = $request->visa_status;
        $candidate->fin_name          = $request->fin_name;
        $candidate->fin_mobile        = $request->fin_mobile;
        $candidate->relationship_name = $request->relationship_name;
        $candidate->fin_address       = $request->fin_address;
        $candidate->account_name      = $request->account_name;
        $candidate->institution       = $request->institution;
        $candidate->account_number    = $request->account_number;
        $candidate->account_bsb       = $request->account_bsb;
        $candidate->fund_details      = $request->fund_details;
        $candidate->save();
        return response()->json(['success'=>'Candidate Details Added Successfully']);
    }

    public function destroy($id)
    {
        Candidates::where('candidate_id',$id)->delete();
        return redirect()->back();

    }


}
