<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $video = video::paginate(5);
        return view('admin.video.index' , compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.add');
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
          'title'=>'required',
          'url'=>'required'
        ]);

        video::create([
          'title'=>$request->title,
          'url'=>$request->url
        ]);

        return redirect()->route('video.index')->with('message' , 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        return view('admin.video.view' , compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        return view('admin.video.update' , compact('video'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
         $request->validate([
          'title'=>'required',
          'url'=>'required'
        ]);

        
         $video->title =$request->title;
          $video->url =$request->url;
         $video->save();

        return redirect()->route('video.index')->with('message' , 'Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        $video->delete();
        return redirect()->route('video.index')->with('message' , 'Successfully Delete');

    }
}
