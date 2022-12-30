<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function process(request $request)
    {
        $request->validate([
            'txt1' => 'required | min:3',
            'txt2' => 'required',
            'txt3' => 'required | numeric',
            'txt4' => 'required | email',
        ],
        [
            'txt1.required' => 'Name is required',
             'txt1.min' => 'Minimum 3 characters required',
             'txt2.required' => 'Surname is reqired',
             'txt3.required' => 'Mobile Number is required',
             'txt3.digits:10' => '10 Digits required',
             'txt3.numeric' => 'Only Numeric allowed',
             'txt4.required' => 'Email is required',
        ]);

        $name = $request->input('txt1');
        $sname = $request->input('txt2');
        $mobile = $request->input('txt3');
        $email = $request->input('txt4');

        echo "Name is $name</br>
        Surname is $sname</br>
        Mobile is $mobile</br>
        Email is $email";
    }
}

