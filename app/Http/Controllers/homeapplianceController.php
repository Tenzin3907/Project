<?php

namespace App\Http\Controllers;

use App\Models\homeappliance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class homeapplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeappliance = homeappliance::all();
        return view('seller.homeappliance.homeappliance')->with('homeappliance',$homeappliance);

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
        $homeappliance = new homeappliance;
        $homeappliance->brand = $request->input('title');
        $homeappliance->price = $request->input('price');
        $homeappliance ->description = $request ->input('description');
        $homeappliance->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadappliance/homeappliance1/',$filename);
            $homeappliance -> image1 = $filename;
        }else{
            return $request;
            $homeappliance->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadappliance/homeappliance2/',$filename);
            $homeappliance -> image2 = $filename;
        }else{
            return $request;
            $homeappliance->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadappliance/homeappliance3/',$filename);
            $homeappliance -> image3 = $filename;
        }else{
            return $request;
            $homeappliance->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadappliance/homeappliance4/',$filename);
            $homeappliance -> image4 = $filename;
        }else{
            return $request;
            $homeappliance->image4='';
        }
        $homeappliance->name = $request->input('name');
        $homeappliance->number = $request->input('number');
        $homeappliance->save();
        return redirect('/homeappliance')->with('status','Data is added for the homeappliance');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from homeappliance where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for homeappliance');
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
        $data = homeappliance::all();
        return view('admin.userhomeappliance')->with('data',$data);
    }
    public function uploadhomeappliances(){
        $homeappliance = homeappliance::all();  
        return view('sellersuploads.uploadhomeappliance')->with('homeappliance',$homeappliance);
    }
}
