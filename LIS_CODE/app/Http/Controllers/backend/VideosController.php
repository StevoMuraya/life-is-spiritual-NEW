<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
        $videos = Videos::latest()->get();
        return view('backend.videos.index',[
            'active'=>'videos',
            'videos'=>$videos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'video_link'=>'required',
        ]);

        Videos::create([
            'video_link' => $request ->video_link,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Videos::find($id);
        return view('backend.videos.select-video',[
            'active'=>'videos',
            'video'=>$video,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'video_link'=>'required',
        ]);

        $videoModel = Videos::find($id);
        $videoModel->video_link = $request->video_link;
        $videoModel->save();

        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = Videos::find($id);
        $videos->delete();
        return back();
    }
}
