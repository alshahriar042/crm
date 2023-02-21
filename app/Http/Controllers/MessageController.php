<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\Helper;
use App\Models\Message;
use App\Models\LeadEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
 public function index(){
    $messages = Message::where('user_id',Auth::id())->get();
      return view('backend.message.index',compact('messages'));
 }


 public function create(){
    // $users = User::all();

    $leadsUser = LeadEntry::where('user_id',Auth::id())->get();
    return view('backend.message.create',compact('leadsUser'));
 }

 public function send(Request $request){
    //   dd($request->all());

      Helper::sendSms($request->phone, $request->description);

      Message::create([
        'user_id' =>Auth::id(),
        'name' => LeadEntry::where('phone',$request->phone)->first()->fname,
        'phone'=>$request->phone,
        'message' =>$request->description,
      ]);

      notify()->success("SMS send successfully.", "Success");
      return back();


 }


}
