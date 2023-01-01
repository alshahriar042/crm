<?php

namespace App\Http\Controllers;

use App\Models\LeadEntry;
use Illuminate\Http\Request;

class LeadManagementController extends Controller
{
    public function index()
    {
        # code..
    }

    public function create(){
        return view('backend.leads.create');
    }


    public function store(Request $request){
            $request->validate([
                'fname' =>'required|string|max:255',
                'lname' =>'required|string|max:255',
                'phone' =>'required',
                'description' =>'required',

            ]);


            LeadEntry::create([
                'fname' => $request->fname,
                'lname' => $request->lname,
                'phone' => $request->phone,
                'address' => $request->address,
                'district' => $request->district,
                'postCode' => $request->postcode,
                'details' => $request->description,
            ]);


            return redirect()->back();
    }


}
