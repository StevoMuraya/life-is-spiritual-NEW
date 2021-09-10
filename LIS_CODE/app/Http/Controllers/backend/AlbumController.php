<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\albums;
use App\Models\Gallery;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = albums::latest()->get();
        return view('backend.albums.index',[
            'active'=>'albums',
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
        $this->validate($request,[
            'title'=> 'required|max:255',
            'description'=> 'required',
            'cover_image'=> 'required',
        ]);

        
        $albumsModel = new albums;
        
        if($request->file()) {
            $cover_image = time().'_'.$request->cover_image->getClientOriginalName();
            $filePath = $request->file('cover_image')->storeAs('albums', $cover_image, 'public');

            $albumsModel->cover_image = time().'_'.$request->cover_image->getClientOriginalName();
            $albumsModel->title = $request->title;
            $albumsModel->desc = $request->description;
            $albumsModel->save();
        }

        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $gallery = Gallery::latest()->where('album_id','=',$id)->get();
        $album = albums::find($id);



        // dd($gallery);
        return view('backend.albums.album-view',[
            'active'=>'albums',
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
        $this->validate($request,[
            'title'=>'required|max:255',
            'description'=>'required',
        ]);

        // dd($request);

        $albumsModel = albums::find($id);;
        
        if($request->file()) {
            $cover_image = time().'_'.$request->cover_image->getClientOriginalName();
            $filePath = $request->file('cover_image')->storeAs('albums', $cover_image, 'public');

            $albumsModel->cover_image = time().'_'.$request->cover_image->getClientOriginalName();
            $albumsModel->title = $request->title;
            $albumsModel->desc = $request->description;
            $albumsModel->save();
        }else{ 
            $albumsModel->title = $request->title;
            $albumsModel->desc = $request->description;
            $albumsModel->save();
        }


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = albums::find($id);
        $album->delete();
        return back();
    }
}
