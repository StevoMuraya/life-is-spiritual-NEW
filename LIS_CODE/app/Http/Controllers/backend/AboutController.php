<?php

namespace App\Http\Controllers\backend;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
        
        $about_one = AboutUs::latest()->where('page','=','about')->where('section','=','one')->first();
        $about_two = AboutUs::latest()->where('page','=','about')->where('section','=','two')->first();
        $about_three = AboutUs::latest()->where('page','=','about')->where('section','=','three')->first();
        $about_four = AboutUs::latest()->where('page','=','about')->where('section','=','four')->first();
        $about_five = AboutUs::latest()->where('page','=','about')->where('section','=','five')->first();
        return view('backend.about.index',[
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

    public function about_one(Request $request){
        $this->validate($request,[
            'about_one'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_one,
            'page' => 'about',
            'section' => 'one',  
        ]);

        return redirect()->back();
    }
    public function about_two(Request $request){
        $this->validate($request,[
            'about_two'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_two,
            'page' => 'about',
            'section' => 'two',  
        ]);

        return redirect()->back();
    }
    public function about_three(Request $request){
        $this->validate($request,[
            'about_three'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_three,
            'page' => 'about',
            'section' => 'three',  
        ]);

        return redirect()->back();
    }
    public function about_four(Request $request){
        $this->validate($request,[
            'about_four'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_four,
            'page' => 'about',
            'section' => 'four',  
        ]);

        return redirect()->back();
    }
    public function about_five(Request $request){
        $this->validate($request,[
            'about_five'=> 'required',
        ]);

        AboutUs::create([
            'about_text' => $request ->about_five,
            'page' => 'about',
            'section' => 'five',  
        ]);

        return redirect()->back();
    }
}
