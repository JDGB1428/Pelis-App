<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class RegisterController extends Controller
{

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        //Modificar el request
        $request->request->add(['username' => Str::slug($request->username)]);

        $this -> validate($request,[
            'name' => 'required|max:10',
            'username' => 'required|unique:users|min:3|max:10',
            'email' => 'required|unique:users|email|max:60',
            'password' =>'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' =>$request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Redirrecionar al vista de peliculas
        return redirect()->route('post.index');
    }
}
