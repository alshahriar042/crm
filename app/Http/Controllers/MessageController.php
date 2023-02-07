<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
 public function index(){
    $message = Message::all();
      return view('backend.message.index',compact('message'));
 }


 public function create(){

    $users = User::all();
    return view('backend.message.create',compact('users'));
 }
}
