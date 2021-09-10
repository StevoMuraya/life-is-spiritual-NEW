<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
            'album_id'=>'required',
        ]);

        $album_idz = $request->album_id;
        

        // $fileUpload = new Gallery;

        if($request->hasfile('image_name'))
         {

            $imageNameArr = [];
            foreach ($request->image_name as $file) {
                // you can also use the original name
                $imageName = $file->getClientOriginalName();
                $imageNameArr[] = $imageName;
                $file->move(public_path('storage/gallery'), $imageName);
            }

            for ($i = 0; $i < count($imageNameArr); $i++) {
                $random = rand(1,4);
                $random_size = "";

                if ($random == 1) {
                    $random_size = "big";
                }else if ($random == 2) {
                    $random_size = "horizontal";
                }else if ($random == 3) {
                    $random_size = "vertical";
                }else{
                    $random_size = "";
                }
                $mytime = Carbon::now();
                

                $gallery[] = [
                    'image_name' => $imageNameArr[$i],
                    'random_size' => $random_size,
                    'album_id' => $album_idz,
                    'created_at' => $mytime,
                    'updated_at' => $mytime,
                ];
            }
            Gallery::insert($gallery);

            // for($x = 0; $x < count($imageNameArr); $x++){
            //     $fileUpload->image_name= $imageNameArr[$x];
            //     $fileUpload->random_size = $random_size;
            //     $fileUpload->album_id = $request->album_id;
            // }
            
            // $fileUpload->save();
            
            // dd(count($imageNameArr));
             
            

         return back();
        
        }
    }

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
