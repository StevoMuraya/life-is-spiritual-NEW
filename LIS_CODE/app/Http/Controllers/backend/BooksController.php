<?php

namespace App\Http\Controllers\backend;

use App\Models\Books;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function __construct()
    {
        $this-> Middleware(['auth']);
    }
    public function index()
    {
        $books = Books::latest()->get();
        return view('backend.books.index',[
            'books'=>$books,
            'active'=>'books',
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
            'price'=> 'required|max:255',
            'description'=> 'required',
            'book_cover'=> 'required'
        ]);

    
        $booksModel = new Books;
        
        if($request->file()) {
            $books_cover = time().'_'.$request->book_cover->getClientOriginalName();
            $filePath = $request->file('book_cover')->storeAs('books', $books_cover, 'public');

            $booksModel->book_cover = time().'_'.$request->book_cover->getClientOriginalName();
            // $booksModel->file_path = '/books/' . $filePath;
            $booksModel->title = $request->title;
            $booksModel->author = $request->author;
            $booksModel->price = $request->price;
            $booksModel->description = $request->description;
            $booksModel->slug = Str::slug($request->title, '-');
            $booksModel->save();

            return back()
            ->with('status','File has been uploaded.')
            ->with('file', $books_cover);
        }
    }

    public function show($slug)
    {
        $book = Books::where('slug','=',$slug)->first();
        return view('backend.books.select-book',[
            'active'=>'books',  
            'book'=>$book,
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
            'author'=>'required|max:255',
            'price'=>'required',
            'description'=>'required',
        ]);

        // dd($request);

        $booksModel = Books::where('slug','=',$id)->first();
        
        if($request->file()) {
            $books_cover = time().'_'.$request->book_cover->getClientOriginalName();
            $filePath = $request->file('book_cover')->storeAs('books', $books_cover, 'public');

            $booksModel->book_cover = time().'_'.$request->book_cover->getClientOriginalName();
            // $booksModel->file_path = '/books/' . $filePath;
            $booksModel->title = $request->title;
            $booksModel->author = $request->author;
            $booksModel->price = $request->price;
            $booksModel->description = $request->description;
            $booksModel->slug = Str::slug($request->title, '-');
            $booksModel->save();
        }else{ 
            $booksModel->title = $request->title;
            $booksModel->author = $request->author;
            $booksModel->price = $request->price;
            $booksModel->description = $request->description;
            $booksModel->slug = Str::slug($request->title, '-');
            $booksModel->save();
        }


        return redirect()->route('books-admin.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::find($id);
        $book->delete();
        return back();
    }
}
