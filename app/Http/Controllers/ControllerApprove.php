<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\camera;
use App\Models\computer;
use App\Models\television;
use App\Models\sofa;
use App\Models\harddisk;
use App\Models\book;
use App\Models\household;
use App\Models\homeappliance;
use App\Models\tablet;
use App\Models\accessories;
use App\Models\mobile;
use App\Models\Product;

class ControllerApprove extends Controller
{
    public function approve(){
        return view('admin.approve');
    }

    public function camera_approve(){
        $cameras = camera::all();
        return view('admin.camera_approve')->with('cameras',$cameras);
    }

    public function camera_approval(Request $request){
        $approve = camera::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //computer approve
    public function computer_approve(){
        $cameras = computer::all();
        return view('admin.computer_approve')->with('cameras',$cameras);
    }

    public function computer_approval(Request $request){
        $approve = computer::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //television approve
    public function television_approve(){
        $cameras = television::all();
        return view('admin.television_approve')->with('cameras',$cameras);
    }

    public function television_approval(Request $request){
        $approve = television::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //sofa approve
    public function sofa_approve(){
        $cameras = sofa::all();
        return view('admin.sofa_approve')->with('cameras',$cameras);
    }

    public function sofa_approval(Request $request){
        $approve = sofa::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //harddisk approve
    public function harddisk_approve(){
        $cameras = harddisk::all();
        return view('admin.harddisk_approve')->with('cameras',$cameras);
    }

    public function harddisk_approval(Request $request){
        $approve = harddisk::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

     //book approve
     public function book_approve(){
        $cameras = book::all();
        return view('admin.book_approve')->with('cameras',$cameras);
    }

    public function book_approval(Request $request){
        $approve = book::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

        //household approve
        public function household_approve(){
            $cameras = household::all();
            return view('admin.household_approve')->with('cameras',$cameras);
        }
    
        public function household_approval(Request $request){
            $approve = household::find($request->postId);
            $approveVal = $request->approve;
            if($approveVal == "on"){
                $approveVal = 1;
            }else {
                $approveVal = 0;
            }
            $approve->approve=$approveVal;
            $approve->save();
            return redirect()->back();
            // return $approve;
        }

    //homeappliance approve
    public function homeappliance_approve(){
        $cameras = homeappliance::all();
        return view('admin.homeappliance_approve')->with('cameras',$cameras);
    }

    public function homeappliance_approval(Request $request){
        $approve = homeappliance::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //tablet approve
    public function tablet_approve(){
        $cameras = tablet::all();
        return view('admin.tablet_approve')->with('cameras',$cameras);
    }

    public function tablet_approval(Request $request){
        $approve = tablet::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //accessories approve
    public function accessories_approve(){
        $cameras = accessories::all();
        return view('admin.accessories_approve')->with('cameras',$cameras);
    }

    public function accessories_approval(Request $request){
        $approve = accessories::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    //mobile approve
    public function mobile_approve(){
        $cameras = mobile::all();
        return view('admin.mobile_approve')->with('cameras',$cameras);
    }

    public function mobile_approval(Request $request){
        $approve = mobile::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }

    
    //Product approve
    public function product_approve(){
        $cameras = Product::all();
        return view('admin.product_approve')->with('cameras',$cameras);
    }

    public function product_approval(Request $request){
        $approve = Product::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect()->back();
        // return $approve;
    }
}
