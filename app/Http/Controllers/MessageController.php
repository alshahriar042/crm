<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\LeadEntry;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
 public function index(){
    $messages = Message::all();
      return view('backend.message.index',compact('messages'));
 }


 public function create(){
    // $users = User::all();

    $leadsUser = LeadEntry::all();
    return view('backend.message.create',compact('leadsUser'));
 }

 public function send(Request $request){
    //   dd($request->all());

      Helper::sendSms($request->phone, $request->description);

      Message::create([
        'name' => LeadEntry::where('phone',$request->phone)->first()->fname,
        'phone'=>$request->phone,
        'message' =>$request->description,
      ]);

      notify()->success("SMS send successfully.", "Success");
      return back();


 }


}
