<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function showform()
    {
        return view('form');
    }
    public function formSubmitted(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|unique:users,email',
                // 'email' => 'required|email',
                'password' => 'required|min:6|max:12'
            ],
            [
                'email.unique' => 'This email is already taken :(',
                'password' => "Password should be 6 to 12 characters long.",
            ]
        );

        $email = $request->input('email');
        $password = $request->input('password');

        $u = new User();
        $u->email = $email;
        $u->password = bcrypt($password);
        $u->save();


        // return view("submitted")->with(['email' => $email]);
        return view('submitted');
    }
}