<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    public function login(){
        return view('auth.login');
      }
  
      public function authenticate(Request $request){
        
          $data=['email'=>$request->email , 'password'=>$request->password];
  
        if(Auth::attempt($data)){
  
          return redirect()->route('Home_admin');
        
      }else{
            return redirect()->back()->with('error' , 'invaled email or password')->with($request);
        }
  
      }
  
  
      public function register(){
        return view('auth.register');
      }
  
      public function do_register(Request $request){
         
          $request->validate([
              'name'=>'required',
              'email'=>'required|email',
              'password' =>'required|confirmed'            
          ]);
  
          User::create(
              [
              'name'=>$request->name,
              'email'=>$request->email,
              'password' =>Hash::make($request->password),
            
  
             ]
          );
       
          return redirect()->route('login')->with('message','user is cerated');
      }
  
      public function logout(){
          if(Auth::check()){
               Auth::logout();
          }
          return redirect()->route('Home');
      }
}
