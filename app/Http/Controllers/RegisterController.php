<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            "title"=>'Register',
            "email"=>null
        ]);
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            'name' => 'required|max:255',
            'username'=> ['required', 'max:255', 'unique:users'],
            'email'=> ['required', 'email:dns', 'unique:users'],
            'password'=> 'required|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);


        User::create($validatedData);


        session()->flash('success','Registration successfull pleasse login !');


        return redirect('/login');
    }

    public function indexHome(Request $request){
        return view('register.index',[
            "title"=>'Register',
            "email"=>$request->email
        ]);
    }
}
