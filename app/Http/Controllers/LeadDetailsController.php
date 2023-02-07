<?php

namespace App\Http\Controllers;

use App\Models\LeadDetails;
use Illuminate\Http\Request;

class LeadDetailsController extends Controller
{

    public function store(Request $request){
        //   dd($request->all());

        LeadDetails::create([
            'lead_id' =>$request->leadId,
            'follow_up_date' =>$request->date,
            'follow_up_details' =>$request->description,
            'status' =>$request->status,
        ]);

        return redirect()->back();

    }
}
