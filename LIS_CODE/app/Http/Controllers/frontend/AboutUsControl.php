<?php

namespace App\Http\Controllers\frontend;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_one = AboutUs::latest()->where('page','=','about')->where('section','=','one')->first();
        $about_two = AboutUs::latest()->where('page','=','about')->where('section','=','two')->first();
        $about_three = AboutUs::latest()->where('page','=','about')->where('section','=','three')->first();
        $about_four = AboutUs::latest()->where('page','=','about')->where('section','=','four')->first();
        $about_five = AboutUs::latest()->where('page','=','about')->where('section','=','five')->first();
        return view('frontend.about.index',[
            'active'=>'about',
            'about_one'=>$about_one,
            'about_two'=>$about_two,
            'about_three'=>$about_three,
            'about_four'=>$about_four,
            'about_five'=>$about_five,
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
