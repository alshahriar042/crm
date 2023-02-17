<?php

namespace App\Http\Controllers;

use App\Models\LeadEntry;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class FollowUpDetailsController extends Controller
{
    public function followupDetails(){

        $followupDetails = LeadEntry::with('leadDetails')->orderBy('id', 'DESC')->get();

        // dd($followupDetails[0]->leadDetails[0]->status);

        // foreach ($followupDetails as $followupDetail ){
        //     foreach ( $followupDetail->leadDetails as $key=>$dd){

        //         dd($followupDetail->leadDetails[$key]->status);
        //     }
        // }


        // foreach()
        return view('backend.leads.followup',compact('followupDetails'));

        // return $followupDetails;
    }
}
