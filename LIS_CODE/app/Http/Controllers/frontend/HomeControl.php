<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blogs;
use App\Models\Books;
use App\Models\AboutUs;
use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Videos;

class HomeControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Sliders::latest()->get();
        $books = Books::latest()->limit(4)->get();
        $blogs = Blogs::latest()->limit(3)->get();
        $main_video = Videos::offset(0)->limit(1)->latest()->first();
        $videos = Videos::offset(1)->limit(3)->latest()->get();
        $about_us_one = AboutUs::latest()->where('page','=','home')->where('section','=','one')->first();
        $about_us_two = AboutUs::latest()->where('page','=','home')->where('section','=','two')->first();


        return view('frontend.home.index',[
            'active'=>'home',
            'sliders'=>$sliders,
            'books'=>$books,
            'blogs'=>$blogs,
            'main_video'=>$main_video,
            'videos'=>$videos,
            'about_us_one'=>$about_us_one,
            'about_us_two'=>$about_us_two,
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
        //
    }
}
