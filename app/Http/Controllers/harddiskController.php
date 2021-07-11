<?php

namespace App\Http\Controllers;

use App\Models\harddisk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class harddiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harddisk = harddisk::all();
        return view('seller.electronic.harddisk')->with('harddisk',$harddisk);

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

    public function storeharddiskdata(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'price' => ['required', 'regex:^\d{1,8}[.]?\d{1,4}$^'],
            'number' => ['required','digits:8']
        ]);
        $harddisk = new harddisk;
        $harddisk->brand = $request->input('title');
        $harddisk->price = $request->input('price');
        $harddisk ->description = $request ->input('description');
        $harddisk->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadharddisk/harddisk1/',$filename);
            $harddisk -> image1 = $filename;
        }else{
            return $request;
            $harddisk->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadharddisk/harddisk2/',$filename);
            $harddisk -> image2 = $filename;
        }else{
            return $request;
            $harddisk->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadharddisk/harddisk3/',$filename);
            $harddisk -> image3 = $filename;
        }else{
            return $request;
            $harddisk->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadharddisk/harddisk4/',$filename);
            $harddisk -> image4 = $filename;
        }else{
            return $request;
            $harddisk->image4='';
        }
        $harddisk->name = $request->input('name');
        $harddisk->number = $request->input('number');
        $harddisk->save();
        return redirect('/harddisk')->with('status','Data is added for the harddisk');

    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from harddisk where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for harddisk');
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
        $data = harddisk::all();
        return view('admin.userharddisk')->with('data',$data);
    }
    public function uploadharddsiks(){
        $harddisk = harddisk::all();  
        return view('sellersuploads.uploadharddisk')->with('harddisk',$harddisk);
    }
}
