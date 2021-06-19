<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\post;
use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function home(){
          $post = post::all();
         
          $video =  video::all();
          $category = category::all();
          $data =  contact::orderby('created_at')->get();
            return view('admin.index' , compact('data' , 'post' , 'video' , 'category'));
        }

        public function index()
        {
          $category =category::all();

           $post= post::orderBy('updated_at','DESC')->paginate(5);
           return view('admin.post.index' , compact('post' , 'category'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
           $category =category::all();
           return view('admin.post.add' , compact('category'));
            
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
           $request->validate([
            'body'=> 'required' ,
            'title'=> 'required' ,
            'post_imag'=>'required',
            'categoire_id'=>'required'
           ]);
           $file = $request->file('post_imag');
           $post_image = $request->title . time() .'.' . $file->extension();
           $file->move('post_image',$post_image);
            post::create(
              [
                  'title'=>$request->title,
                  'body'=>$request->body,
                  'image'=>$post_image ,
                  'category_id'=>$request->categoire_id
                  
              ]
          );
        
        return redirect()->route('post.index')->with('message' ,'Successfully added');
        
        } 
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\post  $post
         * @return \Illuminate\Http\Response
         */
        public function show(post $post)
        {
            return view('admin.post.view',compact('post'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\post  $post
         * @return \Illuminate\Http\Response
         */
        public function edit(post $post)
        {
          
          $category =category::all();
            return view('admin.post.update' , compact( 'post'  , 'category'));
    
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\post  $post
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, post $post)
        {   
      
        
            
                $post->title=$request->title;
                $post->body=$request->body;
                $post->category_id=$request->categoire_id;
                $post->save();
    
           
      
          return redirect()->route('post.index')->with('message' ,'Successfully update');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\post  $post
         * @return \Illuminate\Http\Response
         */
        public function destroy(post $post)
        {
           $post->delete();
           return redirect()->route('post.index')->with('message' ,'Successfully Delete');
        }
    }

