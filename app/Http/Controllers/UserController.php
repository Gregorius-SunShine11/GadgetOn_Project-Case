<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_login(){
        return view('authentication.login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);

        if(!Auth::attempt($credential, $request->input('remember'))){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        // Cookie::queue('userEmail', $request->input('email'));
        // Cookie::queue('userPassword', $request->input('password'));

        return redirect()->route('index_home');


    }

    //A Function To Display Register Page
    public function index_register(){
        return view('authentication.register');
    }

    //A Function To Handle Register
    public function register(Request $request){
        //INSERT CODE HERE
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'confirm' => 'required|same:password',
            'address' => 'required|min:5',
            'gender' => 'required',
            'terms' => 'required'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'Member',
            'gender' => $request->input('gender'),
            'address' => $request->input('address')
        ]);

        return redirect()->route('index_login');
    }

    //A Function To Handle Logout
    public function logout(){
        Auth::logout();
        return redirect()->route('index_login');
    }
}
