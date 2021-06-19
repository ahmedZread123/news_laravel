<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\video;


use Illuminate\Http\Request;

class frontsitecontroller extends Controller
{
    public function show_home(){
        $sed=  post:: limit(4)->get();
       $category =  category::limit(4)->get();  
        $post =  post:: limit(4)->get();
        $post1 = post::orderBy('created_at','DESC')->get();
        $post2 = post::orderBy('created_at','DESC')->get();
        $post3 = post::orderBy('created_at','DESC')->paginate(5);
        $post4 = post:: limit(4)->get();
        $video = video::orderBy('created_at','DESC')->get();

        
        return view('frontsite.index' , compact('post'  , 'category' ,'post1','post2','post3','post4' , 'sed' , 'video'));
       }
    
       public function show_blog( ){
        $sed =  post:: limit(4)->get();
       $category =  category::limit(4)->get();  
        
        $post1 = post::orderBy('created_at','DESC')->get();
        $post3 = post::orderBy('created_at','DESC')->paginate(5);
        $post4 = post:: limit(4)->get();
    
        
        return view('frontsite.blog',compact('post1',  'category' , 'post3', 'post4' , 'sed'));
      }
    
       public function show_single(post $post ){
         $post->views++ ;
         $post->save(); 
        $sed =  post:: limit(4)->get();
        $post1 = post::orderBy('created_at','DESC')->get();
        
       $category =  category::limit(4)->get();  
         
       return view('frontsite.single' , compact('post' , 'sed' ,'category' ,'post1'));
        
     }

   
}
