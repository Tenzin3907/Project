<?php

namespace App\Http\Controllers;

use App\Models\accessories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class accessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories = accessories::all();
        return view('seller.mobilephone.accessories')->with('accessories',$accessories);

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

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'price' => ['required', 'regex:^\d{1,8}[.]?\d{1,4}$^'],
            'number' => ['required','digits:8']
        ]);
        $accessories = new accessories;
        $accessories->brand = $request->input('type');
        $accessories->title = $request->input('title');
        $accessories->price = $request->input('price');
        $accessories ->description = $request ->input('description');
        $accessories->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadaccessories/accessories1/',$filename);
            $accessories -> image1 = $filename;
        }else{
            return $request;
            $accessories->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadaccessories/accessories2/',$filename);
            $accessories -> image2 = $filename;
        }else{
            return $request;
            $accessories->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadaccessories/accessories3/',$filename);
            $accessories -> image3 = $filename;
        }else{
            return $request;
            $accessories->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadaccessories/accessories4/',$filename);
            $accessories -> image4 = $filename;
        }else{
            return $request;
            $accessories->image4='';
        }
        $accessories->name = $request->input('name');
        $accessories->number = $request->input('number');
        $accessories->save();
        return redirect('/accessories')->with('status','Data is added for the accessories');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from accessories where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for accessories');
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
        $data = accessories::all();
        return view('admin.useraccessories')->with('data',$data);
    }
    public function uploadaccessories(){
        $accessories = accessories::all();  
        return view('sellersuploads.uploadaccessories')->with('accessories',$accessories);
    }
}
