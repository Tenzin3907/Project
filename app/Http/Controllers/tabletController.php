<?php

namespace App\Http\Controllers;
use App\Models\tablet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class tabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablet = tablet::all();
        return view('seller.mobilephone.tablet')->with('tablet',$tablet);

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
        $tablet = new tablet;
        $tablet->brand = $request->input('type');
        $tablet->price = $request->input('price');
        $tablet ->description = $request ->input('description');
        $tablet->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtablet/tablet1/',$filename);
            $tablet -> image1 = $filename;
        }else{
            return $request;
            $tablet->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtablet/tablet2/',$filename);
            $tablet -> image2 = $filename;
        }else{
            return $request;
            $tablet->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtablet/tablet3/',$filename);
            $tablet -> image3 = $filename;
        }else{
            return $request;
            $tablet->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadtablet/tablet4/',$filename);
            $tablet -> image4 = $filename;
        }else{
            return $request;
            $tablet->image4='';
        }
        $tablet->name = $request->input('name');
        $tablet->number = $request->input('number');
        $tablet->save();
        return redirect('/tablet')->with('status','Data is added for the tablet');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::delete('delete from tablet where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for tablet');
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
        $data = tablet::all();
        return view('admin.usertablet')->with('data',$data);
    }
    public function uploadtablets(){
        $tablet = tablet::all();  
        return view('sellersuploads.uploadtablet')->with('tablet',$tablet);
    }
}
