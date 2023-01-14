<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index_login(){
        return view('authentication.login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        if(!Auth::attempt($credential)){
            return redirect()->back()->withErrors('Invalid Credential!');
        }

        if($request->remember){
            Cookie::queue('CookieEmail',$request->email,60);
            Cookie::queue('CookiePassword',$request->password,60);
        }


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

    public function updateProfile(Request $request){
        $request->validate([
            'profileName' => 'required|min:5',
            'email' => 'required|email',
            'newPassword' => 'nullable|min:5',
            'currentPassword' => 'required|min:5',
            'profileAddress' => 'required|min:5',
        ]);

        if(!Hash::check($request->input('currentPassword'),Auth::user()->password )){
            return redirect()->back()->withErrors('Incorrect Current Password');
        }

        if($request->input('email') !== Auth::user()->email){
            $request->validate([
                'email' => 'required|email|unique:users'
            ]);
        }

        User::whereId(Auth::user()->id)->update([
            'name' => $request->input('profileName'),
            'email' => $request->input('email'),
            'address' => $request->input('profileAddress')
        ]);

        if($request->input('newPassword') != null){
            User::whereId(Auth::user()->id)->update([
                'password' => Hash::make($request->input('newPassword'))
            ]);
        }

        return redirect()->back();
    }

    public function index_accountDetail(){
        return view('account.accdetail');
    }
}
