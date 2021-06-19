<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
 
   public function show_contact(){
    $category =  category::limit(4)->get();  
     
    return view('frontsite.Contact_us' , compact('category'));
 
  }

  public function store_contact(Request $request){
      
    $request>validator([
     'name'=>'required',
     'email'=>'required',
     'message'=>'required'
    ]);

    contact::create([
     'name'=>$request->name,
     'subject'=>$request->subject,
     'email'=>$request->email,
     'message'=>$request->message

    ]);
    return redirect()->route('contact')->with('message' , 'Successfully send message');
  }

   public function view_contact(contact $contact)
  {
    
    return view('admin.view_contact',compact('contact'));

  }
}
