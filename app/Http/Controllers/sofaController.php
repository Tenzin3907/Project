<?php

namespace App\Http\Controllers;

use App\Models\sofa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class sofaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sofa = sofa::all();
        return view('seller.furniture.sofa')->with('sofa',$sofa);

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
        $sofa = new sofa;
        $sofa->brand = $request->input('title');
        $sofa->price = $request->input('price');
        $sofa ->description = $request ->input('description');
        $sofa->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadsofa/sofa1/',$filename);
            $sofa -> image1 = $filename;
        }else{
            return $request;
            $sofa->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadsofa/sofa2/',$filename);
            $sofa -> image2 = $filename;
        }else{
            return $request;
            $sofa->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadsofa/sofa3/',$filename);
            $sofa -> image3 = $filename;
        }else{
            return $request;
            $sofa->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadsofa/sofa4/',$filename);
            $sofa -> image4 = $filename;
        }else{
            return $request;
            $sofa->image4='';
        }
        $sofa->name = $request->input('name');
        $sofa->number = $request->input('number');
        $sofa->save();
        return redirect('/sofa')->with('status','Data is added for the sofa');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from sofa where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for sofa');
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
        $data = sofa::all();
        return view('admin.usersofa')->with('data',$data);
    }
    public function uploadsofas(){
        $sofa = sofa::all();  
        return view('sellersuploads.uploadsofa')->with('sofa',$sofa);
    }
}
