<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileControl extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
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
        $user = User::find($id);
        return view('frontend.profile.index',[
            'active'=>'none',
            'user'=>$user,
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
        return view('frontend.profile.edit',[
            'active'=>'none',
        ]);
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
        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'phone'=>'required|max:255',
        'address'=>'required|max:255',
        'residence'=>'required|max:255',
        'country'=>'required|max:255',
        'postal_code'=>'required|max:255',
        ]);

        $usermodel = User::where('email','=',$id)->first();
        $usermodel->name = $request->name;
        $usermodel->email = $request->email;
        $usermodel->phone = $request->phone;
        $usermodel->address = $request->address;
        $usermodel->residence = $request->residence;
        $usermodel->country = $request->country;
        $usermodel->ppostal_code = $request->postal_code;
        $usermodel->save();

        return redirect()->route('profile.show',$request->email);
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
