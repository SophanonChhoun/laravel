<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        return view("login");
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user_data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user_data))
        {
            return redirect("/successlogin");
        }else{
            return back()->with('Error','Wrong Login Details');
        }
    }

    public function successlogin()
    {
        return view("successlogin");
    }
}
