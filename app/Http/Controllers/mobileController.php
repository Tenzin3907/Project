<?php

namespace App\Http\Controllers;
use App\Models\mobile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class mobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobile = mobile::all();
        return view('seller.mobilephone.mobile')->with('mobile',$mobile);

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
        $mobile = new mobile;
        $mobile->brand = $request->input('brand');
        $mobile->price = $request->input('price');
        $mobile ->description = $request ->input('description');
        $mobile->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadmobile/mobile1/',$filename);
            $mobile -> image1 = $filename;
        }else{
            return $request;
            $mobile->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadmobile/mobile2/',$filename);
            $mobile -> image2 = $filename;
        }else{
            return $request;
            $mobile->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadmobile/mobile3/',$filename);
            $mobile -> image3 = $filename;
        }else{
            return $request;
            $mobile->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadmobile/mobile4/',$filename);
            $mobile -> image4 = $filename;
        }else{
            return $request;
            $mobile->image4='';
        }
        $mobile->name = $request->input('name');
        $mobile->number = $request->input('number');
        $mobile->save();
        return redirect('/mobile')->with('status','Data is added for the mobile');

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
        DB::delete('delete from mobile where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for mobile');
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
        $data = mobile::all();
        return view('admin.usermobile')->with('data',$data);
    }
    public function uploadmobiles(){
        $mobile = mobile::all();  
        return view('sellersuploads.uploadmobile')->with('mobile',$mobile);
    }
}
