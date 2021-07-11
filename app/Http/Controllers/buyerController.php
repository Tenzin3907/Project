<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use App\Models\Computer;
use App\Models\camera;
use App\Models\book;
use App\Models\harddisk;
use App\Models\television;
use App\Models\household;
use App\Models\sofa;
use App\Models\mobile;
use App\Models\accessories;
use App\Models\tablet;
use App\Models\homeappliance;
use App\Models\Product;
use DB;

use Illuminate\Http\Request;

class buyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $form = buyer::all();
        return view('admin.buyform')->with('form',$form)->with('id', $id);
    }

    public function buying($id){
        $Computer = Computer::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function camerabuying($id){
        $Computer =camera::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function bookbuying($id){
        $Computer =book::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function harddiskbuying($id){
        $Computer =harddisk::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function televisionbuying($id){
        $Computer =television::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function householdbuying($id){
        $Computer =household::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function sofabuying($id){
        $Computer =sofa::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function mobilebuying($id){
        $Computer =mobile::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function accessoriesbuying($id){
        $Computer =accessories::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function tabletbuying($id){
        $Computer =tablet::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
    }
    public function homeappliancebuying($id){
        $Computer =homeappliance::findorFail($id);
        return view('admin.buyform')->with('Computer',$Computer);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'lastname' => ['required', 'string', 'max:255','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'number' => ['required','digits:8'],
            
        ]);

        $form = new buyer;
        $form->brand = $request->input('brand');
        $form->firstname = $request->input('firstname');
        $form->lastname = $request->input('lastname');
        $form->email = $request->input('email');
        $form->delivery = $request ->input('delivery');
        $form->payment = $request->input('payment');
        $form->number = $request->input('number');
        $form->save();
        return redirect('/')->with('Mystatus','Ordered Successfully');
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
    public function delete($id)
    {
        DB::delete('delete from buyer where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for buyer');
    }
    public function getuseruploads(){
        $form = buyer::all();
        return view('admin.userbuy')->with('form',$form);
    }
}
