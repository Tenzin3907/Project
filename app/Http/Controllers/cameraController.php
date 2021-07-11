<?php

namespace App\Http\Controllers;
use App\Models\camera;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class cameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camera = camera::all();
        return view('seller.electronic.camera')->with('camera',$camera);

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
        $camera = new camera;
        $camera->brand = $request->input('brands');
        $camera->price = $request->input('price');
        $camera ->description = $request ->input('description');
        $camera->dzongkhag = $request->input('dzongkhag');
        if($request->hasfile('image1')){
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcameras/camera1/',$filename);
            $camera -> image1 = $filename;
        }else{
            return $request;
            $camera->image1='';
        }

        if($request->hasfile('image2')){
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcameras/camera2/',$filename);
            $camera -> image2 = $filename;
        }else{
            return $request;
            $camera->image2='';
        }

        if($request->hasfile('image3')){
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcameras/camera3/',$filename);
            $camera -> image3 = $filename;
        }else{
            return $request;
            $camera->image3='';
        }

        if($request->hasfile('image4')){
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploadcameras/camera4/',$filename);
            $camera -> image4 = $filename;
        }else{
            return $request;
            $camera->image4='';
        }
        $camera->name = $request->input('name');
        $camera->number = $request->input('number');
        $camera->save();
        return redirect('/camera')->with('status','Data is added for the camera');

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
        DB::delete('delete from camera where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for camera');
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
        $data = camera::all();
        return view('admin.usercamera')->with('data',$data);
    }
    public function uploadcameras(){
        $camera = camera::all();  
        return view('sellersuploads.uploadcamera')->with('camera',$camera);
    }
}
