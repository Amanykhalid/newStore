<?php

namespace App\Http\Controllers;

 use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;


class UserController extends Controller
{
    //
    public function create()
    {
        return view('admin.register');
    }
    public function store(Request $req){
        $req->validate([
            'name'=>'required|max:255|min:3|unique:users,name',
            'email'=>'required|email|unique:users,email',
            //name.last-name_12@domian.com
            // regex:/^[a-zA-Z0-9]+[a-zA-Z0-9\.\-_]*@[a-zA-Z0-9]+[a-zA-Z0-9\.\-]*[a-zA-Z0-9]*$/
            'password'=>['required','min:8','regex:/(A-Z|a-z)*[0-9]+$|confirmed/'],
            'gender'=>'required|in:male,female',
            'birthday'=>'required',
            'phone'=>['required','regex:/^(059|056)\-*(\d{7})$/']

        ]
       );
       $user=new User();
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->gender=$req->gender;
       $user->birthday=$req->birthday;
       $user->phone=$req->phone;
       $user->save();

        // session()->flash('success', 'User added!');
        return redirect()->route('admin.register')->with('success', 'User added!');

    }
}
