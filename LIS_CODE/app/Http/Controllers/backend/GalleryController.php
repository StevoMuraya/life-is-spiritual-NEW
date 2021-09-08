<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
        $gallery = Gallery::latest()->get();
        return view('backend.gallery.index',[
            'active'=>'gallery',
            'gallery'=>$gallery,
        ]);
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'image_name'=>'required',
        ]);

        $random = rand(1,4);
        $random_size = "";

        if ($random == 1) {
            $random_size = "Big";
        }else if ($random == 2) {
            $random_size = "horizontal";
        }else if ($random == 3) {
            $random_size = "Vertical";
        }else{
            $random_size = "";
        }


        
        $galleryModel = new Gallery;
        
        if($request->file()) {
            $image_name = time().'_'.$request->image_name->getClientOriginalName();
            $filePath = $request->file('image_name')->storeAs('gallery', $image_name, 'public');

            $galleryModel->image_name = time().'_'.$request->image_name->getClientOriginalName();
            $galleryModel->random_size = $random_size;
            $galleryModel->save();

            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $image = Gallery::find($id);

        $image->delete();
        return back();
    }
}
