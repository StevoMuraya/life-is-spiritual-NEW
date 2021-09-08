<?php

namespace App\Http\Controllers\backend;

use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AboutUs;

class HomeController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
        $about_us_one = AboutUs::latest()->where('page','=','home')->where('section','=','one')->first();
        $about_us_two = AboutUs::latest()->where('page','=','home')->where('section','=','two')->first();

        // if($about_us_two ==null){
        //     $about_us_two=2;
        // }

        // dd($about_us_two);
        $sliders = Sliders::latest()-> get();
        return view('backend.home.index',[
            'sliders'=>$sliders,
            'about_us_one'=>$about_us_one,
            'about_us_two'=>$about_us_two,
            'active'=>'home',
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
        // dd($request);
        $this->validate($request,[
            'slider_title'=>'required',
            'slider_text'=>'required',
            'slider_image'=>'required',
        ]);
        
        $SliderModel = new Sliders;
        
        if($request->file()) {
            $sliders_image = time().'_'.$request->slider_image->getClientOriginalName();
            $filePath = $request->file('slider_image')->storeAs('sliders', $sliders_image, 'public');

            $SliderModel->title = $request->slider_title;
            $SliderModel->sub_title = $request->slider_text;
            $SliderModel->slider_image = time().'_'.$request->slider_image->getClientOriginalName();
            $SliderModel->save();

            return back()
            ->with('status','Content has been uploaded.')
            ->with('file', $sliders_image);
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
        $slider = Sliders::find($id);
        return view('backend.home.select-home',[
            'active'=>'home',
            'slider'=>$slider,
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

    public function update(Request $request, $id)
    { 
        $this->validate($request,[
            'slider_title'=>'required',
            'slider_text'=>'required',
        ]);

        $SliderModel = Sliders::find($id);
        
        if($request->file()) {
            $sliders_image = time().'_'.$request->slider_image->getClientOriginalName();
            $filePath = $request->file('slider_image')->storeAs('sliders', $sliders_image, 'public');

            $SliderModel->title = $request->slider_title;
            $SliderModel->sub_title = $request->slider_text;
            $SliderModel->slider_image = time().'_'.$request->slider_image->getClientOriginalName();
            $SliderModel->save();

        }else{
            $SliderModel->title = $request->slider_title;
            $SliderModel->sub_title = $request->slider_text;
            $SliderModel->save();

        }
        return redirect()->route('home-admin.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Sliders::find($id);

        $slider->delete();
        return back();
    }
    public function about_us_one(Request $request){
        // dd($request);
        $this->validate($request,[
            'about_section_one'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_section_one,
            'page' => 'home',
            'section' => 'one',  
        ]);

        return redirect()->back();
    }
    public function about_us_two(Request $request){
        // dd($request);
        $this->validate($request,[
            'about_section_two'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_section_two,
            'page' => 'home',
            'section' => 'two',  
        ]);

        return redirect()->back();
    }
}
