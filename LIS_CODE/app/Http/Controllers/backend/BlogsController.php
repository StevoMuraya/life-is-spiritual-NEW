<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    
    public function index()
    {
        $blogs = Blogs::latest()->get();
        return view('backend.blogs.index',[
            'active'=>'blogs',
            'blogs'=>$blogs,
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
            'author'=> 'required|max:255',
            'description'=> 'required',
            'blog_image'=> 'required',
        ]);

    
        $blogsMode = new Blogs();
        
        if($request->file()) {
            $blog_image = time().'_'.$request->blog_image->getClientOriginalName();
            $filePath = $request->file('blog_image')->storeAs('blogs', $blog_image, 'public');

            $blogsMode->blog_image = time().'_'.$request->blog_image->getClientOriginalName();
            $blogsMode->title = $request->title;
            $blogsMode->author = $request->author;
            $blogsMode->description = $request->description;
            $blogsMode->save();

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
        
        $blog = Blogs::find($id);
        return view('backend.blogs.select-blog',[
            'active'=>'blogs',
            'blog'=>$blog,
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
            'title'=> 'required|max:255',
            'author'=> 'required|max:255',
            'description'=> 'required',
        ]);

    
        $blogsMode = Blogs::find($id);
        
        if($request->file()) {
            $blog_image = time().'_'.$request->blog_image->getClientOriginalName();
            $filePath = $request->file('blog_image')->storeAs('blogs', $blog_image, 'public');

            $blogsMode->blog_image = time().'_'.$request->blog_image->getClientOriginalName();
            $blogsMode->title = $request->title;
            $blogsMode->author = $request->author;
            $blogsMode->description = $request->description;
            $blogsMode->save();
        }else{
            $blogsMode->title = $request->title;
            $blogsMode->author = $request->author;
            $blogsMode->description = $request->description;
            $blogsMode->save();
        }
        return redirect()->route('blogs-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $blog = Blogs::find($id);
        $blog->delete();
        return back();
    }
}
