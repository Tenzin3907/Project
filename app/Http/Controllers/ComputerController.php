<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Computer;
use App\Models\camera;
use App\Models\television;
use App\Models\harddisk;
use App\Models\sofa;
use App\Models\household;
use App\Models\homeappliance;
use App\Models\accessories;
use App\Models\mobile;
use App\Models\tablet;
use App\Models\book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Computer = Computer::all();
        return view('seller.electronic.computer')->with('Computer',$Computer);

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
        $Computer = new Computer;
        $Computer->brand = $request->input('brands');
        $Computer->price = $request->input('price');
        $Computer ->description = $request ->input('description');
        $Computer->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcomputers/computer1/',$filename);
            $Computer -> image1 = $filename;
        }else{
            return $request;
            $Computer->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcomputers/computer2/',$filename);
            $Computer -> image2 = $filename;
        }else{
            return $request;
            $Computer->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcomputers/computer3/',$filename);
            $Computer -> image3 = $filename;
        }else{
            return $request;
            $Computer->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcomputers/computer4/',$filename);
            $Computer -> image4 = $filename;
        }else{
            return $request;
            $Computer->image4='';
        }
        $Computer->name = $request->input('name');
        $Computer->number = $request->input('number');
        $Computer->save();
        return redirect('/computer')->with('status','Data is added for the Computer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       DB::delete('delete from computer where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for Computer');
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
        $data = Computer::all();
        return view('admin.usercomputer')->with('data',$data);
    }
    public function userindex()
    {
        $Product = Product::all();
        $Computer = Computer::all();  
        $camera = camera::all();
        $television = television::all();  
        $harddisk = harddisk::all(); 
        $sofa = sofa::all(); 
        $household = household::all(); 
        $homeappliance = homeappliance::all(); 
        $accessories = accessories::all(); 
        $mobile = mobile::all(); 
        $tablet = tablet::all(); 
        $book = book::all(); 

        return view('index')->with('Product',$Product)
                            ->with('Computer',$Computer)
                            ->with('camera',$camera)
                            ->with('television',$television)
                            ->with('harddisk',$harddisk)
                            ->with('sofa',$sofa)
                            ->with('household',$household)
                            ->with('homeappliance',$homeappliance)
                            ->with('accessories',$accessories)
                            ->with('mobile',$mobile)
                            ->with('tablet',$tablet)
                            ->with('book',$book);

    }
    public function uploadcomputers(){
        $Computer = Computer::all();  
        return view('sellersuploads.uploadcomputers')->with('Computer',$Computer);
    }
}
