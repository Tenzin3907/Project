<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
    {
        public function indexx()
        {
            $Product = Product::all();
            return view('admin.Product')
            ->with('Product',$Product);
        }
    
        public function store(Request $request)
        {
    
            $Product = new Product;
    
        $Product->PName = $request->input('PName');
        $Product->Price = $request->input('Price');
        $Product->Discription = $request->input('Discription');
        // $Product->Image = $request->input('Image');
    
        if($request->hasfile('Image')){
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploads/Product/',$filename);
            $Product -> Image = $filename;
        }else{
            // return dd('error');
            return $request;
            $Product->Image='';
        }
        if($request->hasfile('Image1')){
            $file1 = $request->file('Image1');
            $extension = $file1->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file1 -> move('uploads/Product1/',$filename);
            $Product -> Image1 = $filename;
        }else{
            // return dd('error');
            return $request;
            $Product->Image1='';
        }
        if($request->hasfile('Image2')){
            $file2 = $request->file('Image2');
            $extension = $file2->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file2 -> move('uploads/Product2/',$filename);
            $Product -> Image2 = $filename;
        }else{
            // return dd('error');
            return $request;
            $Product->Image2='';
        }
        if($request->hasfile('Image3')){
            $file3 = $request->file('Image3');
            $extension = $file3->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file3 -> move('uploads/Product3/',$filename);
            $Product -> Image3 = $filename;
        }else{
            // return dd('error');
            return $request;
            $Product->Image3='';
        }

        $Product->save();
    
        return redirect('/Product')->with('status','Data is Added for the Product');
    
        }
    
    public function edit($id)
    {
        $Product = Product::findOrFail($id);
        return view('admin.Product.edit')->with('Product',$Product);
        
    }
    public function update(Request $request, $id)
    {
        $Product = Product::findOrFail($id);
        $Product->PName= $request->input('PName');
        $Product->Price= $request->input('Price');
        $Product->Discription=$request->input('Discription');
        // $Product->image=$request->input('image');

        if($request->hasfile('Image')){
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file -> move('uploads/Product/',$filename);
            $Product -> Image = $filename;
        }
        if($request->hasfile('Image1')){
            $file1 = $request->file('Image1');
            $extension = $file1->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file1 -> move('uploads/Product1/',$filename);
            $Product -> Image1 = $filename;
        }
        if($request->hasfile('Image2')){
            $file2 = $request->file('Image2');
            $extension = $file2->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file2 -> move('uploads/Product2/',$filename);
            $Product -> Image2 = $filename;
        }
        if($request->hasfile('Image3')){
            $file3 = $request->file('Image3');
            $extension = $file3->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file3 -> move('uploads/Product3/',$filename);
            $Product -> Image3 = $filename;
        }

        $Product->update();
        return redirect('/Product')->with('status','Data is Updated for Product');
    }
    public function delete($id)
    {
        DB::delete('delete from product where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for product');
    }


    public function userindex()
    {
        $Product = Product::all();
        return view('index')->with('Product',$Product);
    }
    public function uploadproducts(){
        $Product = Product::all();  
        return view('admin.item')->with('Product',$Product);
    }
}

    