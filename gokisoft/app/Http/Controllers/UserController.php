<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(Request $request)
    {
        return view('user/view');
    }

    public function post(Request $request)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $pwd = $request->pwd;
        $address = $request->address;

        echo $fullname.'-'.$email.'-'.$pwd.'-'.$address;
    }
}
