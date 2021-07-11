<?php

namespace App\Http\Controllers;

use App\Models\household;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class householdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $household = household::all();
        return view('seller.furniture.household')->with('household',$household);

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

    public function storehousehold(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'price' => ['required', 'regex:^\d{1,8}[.]?\d{1,4}$^'],
            'number' => ['required','digits:8']
        ]);
        $household = new household;
        $household->brand = $request->input('title');
        $household->price = $request->input('price');
        $household ->description = $request ->input('description');
        $household->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadhouseholds/household1/',$filename);
            $household -> image1 = $filename;
        }else{
            return $request;
            $household->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadhouseholds/household2/',$filename);
            $household -> image2 = $filename;
        }else{
            return $request;
            $household->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadhouseholds/household3/',$filename);
            $household -> image3 = $filename;
        }else{
            return $request;
            $household->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadhouseholds/household4/',$filename);
            $household -> image4 = $filename;
        }else{
            return $request;
            $household->image4='';
        }
        $household->name = $request->input('name');
        $household->number = $request->input('number');
        $household->save();
        return redirect('/household')->with('status','Data is added for the household');

    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from household where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for household');
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
        $data = household::all();
        return view('admin.userhousehold')->with('data',$data);
    }
    public function uploadhouseholds(){
        $household = household::all();  
        return view('sellersuploads.uploadhousehold')->with('household',$household);
    }
}
