<?php

namespace App\Http\Controllers;

use App\Models\LeadEntry;
use Illuminate\Http\Request;

class LeadManagementController extends Controller
{
    public function index()
    {
       $leads=LeadEntry::orderBy('id', 'asc')->get();
    //    dd($leads);
        return view('backend.leads.index',compact('leads'));
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

            notify()->success("Lead Created successfully.", "Success");

            return redirect()->back();
    }


    public function edit($id)
    {
       $lead =LeadEntry::where('id',$id)->first();
       return view('backend.leads.edit',compact('lead'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'fname' =>'required|string|max:255',
            'lname' =>'required|string|max:255',
            'phone' =>'required',
            'description' =>'required',

        ]);

         $lead= LeadEntry::find($id);

        $lead->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'address' => $request->address,
            'district' => $request->district,
            'postCode' => $request->postcode,
            'details' => $request->description,
        ]);
        notify()->success("Lead Edited successfully.", "Success");

        return redirect()->route('lead.list');
}

public function destroy($id)
{
    # code...
    $lead= LeadEntry::find($id)->delete();
    notify()->success("Lead deleted successfully.", "Success");
    return redirect()->route('lead.list');

}


}
