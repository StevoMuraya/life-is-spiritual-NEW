<?php

namespace App\Http\Controllers\frontend;

use App\Models\albums;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $gallerys = Gallery::latest()->limit(2)->where('album_id','=',$id)->get();
        $albums = albums::latest()->get();
        // $gallery = Gallery::latest()->get();
        return view('frontend.gallery.index',[
            'active'=>'gallery',
            // 'gallerys'=>$gallerys,
            'albums'=>$albums,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::latest()->where('albums_id','=',$id)->get();
        $album = albums::find($id);

        if ($album ==null) {
            abort(404);
        }

        return view('frontend.gallery.selected-album',[
            'active'=>'gallery',
            'album_id'=>$id,
            'gallery'=>$gallery,
            'album'=>$album,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
