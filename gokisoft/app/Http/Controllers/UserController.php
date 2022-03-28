<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $userList = DB::table('users')
        //     ->paginate(10);
        $userList = User::paginate(10);

        $index = 0;
        if(isset($request->page)) {
            $index = ($request->page - 1) * 10;
        }

        return view('user.index', [
            'userList' => $userList,
            'index' => $index
        ]);
    }

    public function view(Request $request)
    {
        return view('user/view');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $fullname = $email = $address = $birthday = "";

        $user = DB::table('users')
            ->where('id', $id)
            ->get();

        if($user != null && count($user) > 0) {
            $fullname = $user[0]->name;
            $email = $user[0]->email;
            $address = $user[0]->address;
            $birthday = $user[0]->birthday;
        }

        return view('user/edit', [
            'id' => $id,
            'fullname' => $fullname,
            'email' => $email,
            'address' => $address,
            'birthday' => $birthday
        ]);
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        // DB::table('users')
        //     ->where('id', $id)
        //     ->delete();

        User::where('id', $id)
            ->delete();
    }

    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'fullname' => 'required',
            'pwd' => 'required',
        ]);

        $fullname = $request->fullname;
        $email = $request->email;
        $pwd = $request->pwd;
        $address = $request->address;
        $birthday = $request->birthday;

        // DB::table('users')->insert([
        //     'name' => $fullname,
        //     'address' => $address,
        //     'birthday' => $birthday,
        //     // 123456 -> A1, A2, A3, ... -> login -> 123456 -> An -> check khop dc A1, A2, A3
        //     'password' => Hash::make($pwd),
        //     'email' => $email
        // ]);

        User::insert([
            'name' => $fullname,
            'address' => $address,
            'birthday' => $birthday,
            'password' => Hash::make($pwd),
            'email' => $email
        ]);

        return redirect()->route('user-list');
    }

    public function confirmEdit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'fullname' => 'required'
        ]);

        $fullname = $request->fullname;
        $email = $request->email;
        $pwd = $request->pwd;
        $address = $request->address;
        $birthday = $request->birthday;

        $data = [
                'name' => $fullname,
                'address' => $address,
                'birthday' => $birthday,
                'email' => $email
            ];
        if($pwd != "") {
            $data['password'] = Hash::make($pwd);
        }

        // DB::table('users')
        //     ->where('id', $request->id)
        //     ->update($data);
        User::where('id', $request->id)
            ->update($data);

        return redirect()->route('user-list');
    }
}
