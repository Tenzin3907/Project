<?php

namespace App\Http\Controllers;

use App\Models\television;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class televisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $television = television::all();
        return view('seller.electronic.television')->with('television',$television);

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

    public function storetelevisiondata(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'price' => ['required', 'regex:^\d{1,8}[.]?\d{1,4}$^'],
            'number' => ['required','digits:8']
        ]);
        $television = new television;
        $television->brand = $request->input('brands');
        $television->price = $request->input('price');
        $television ->description = $request ->input('description');
        $television->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtelevision/television1/',$filename);
            $television -> image1 = $filename;
        }else{
            return $request;
            $television->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtelevision/television2/',$filename);
            $television -> image2 = $filename;
        }else{
            return $request;
            $television->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtelevision/television3/',$filename);
            $television -> image3 = $filename;
        }else{
            return $request;
            $television->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtelevision/television4/',$filename);
            $television -> image4 = $filename;
        }else{
            return $request;
            $television->image4='';
        }
        $television->name = $request->input('name');
        $television->number = $request->input('number');
        $television->save();
        return redirect('/television')->with('status','Data is added for the television');

    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from television where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for television');
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
        $data = television::all();
        return view('admin.usertelevision')->with('data',$data);
    }
    public function uploadtelevisions(){
        $television = television::all();  
        return view('sellersuploads.uploadtelevision')->with('television',$television);
    }
}
