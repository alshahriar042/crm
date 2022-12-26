<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {

        return view('register.register');
    }

    public function store(Request $request)
    {
            $this->validate($request,[
                'name' => 'required|string',
                'phone' => 'required|numeric',
                'email' => 'required|email'
            ]);



    }
}
