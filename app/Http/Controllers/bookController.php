<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = book::all();
        return view('seller.Books.book')->with('book',$book);

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

    public function storebookdata(Request $request){
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
                'price' => ['required', 'regex:^\d{1,8}[.]?\d{1,4}$^'],
                'number' => ['required','digits:8']
                
            ]);

        $book = new book;
        $book->brand = $request->input('title');
        $book->types = $request->input('types');
        $book->price = $request->input('price');
        $book->description = $request ->input('description');
        $book->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadbook/book1/',$filename);
            $book -> image1 = $filename;
        }else{
            return $request;
            $book->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadbook/book2/',$filename);
            $book-> image2 = $filename;
        }else{
            return $request;
            $book->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadbook/book3/',$filename);
            $book -> image3 = $filename;
        }else{
            return $request;
            $book->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadbook/book4/',$filename);
            $book -> image4 = $filename;
        }else{
            return $request;
            $book->image4='';
        }
        $book->name = $request->input('name');
        $book->number = $request->input('number');
        $book->save();
        return redirect('/book')->with('status','Data is added for the books');

    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from book where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for book');
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
    public function getuseruploads(){
        $data = book::all();
        return view('admin.userbook')->with('data',$data);
    }
    public function uploadbook(){
        $book = book::all();  
        return view('sellersuploads.uploadbook')->with('book',$book);
    }
}
