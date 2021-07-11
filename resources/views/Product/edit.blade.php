
@extends('layoutss.master')

@section('title')
Product | One More Time
@endsection

@section('content')
<div class="container" style="margin-top:100px;">
<form action="{{url('Product-update/' .$Product->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}
      <div class="modal-body">
      
          <div class="mb-3">
            <label for="recipient" class="col-form-label">Product Name:</label>
            <input type="text" name="PName" class="form-control" id="recipient">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Price:</label>
            <input type="text" name="Price" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Discription:</label>
            <textarea name="Discription" class="form-control" id="message-text"></textarea>
          </div>
          
        <div class="mb-3">
          <label>Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Image" class="form-control">
                </div>
             </div>
         </div>

         <div class="mb-3">
          <label>Image1</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Image1" class="form-control">
                </div>
             </div>
         </div>
      
         <div class="mb-3">
          <label>Image2</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Image2" class="form-control">
                </div>
             </div>
         </div>
      
         <div class="mb-3">
          <label>Image3</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Image3" class="form-control">
                </div>
             </div>
         </div>
      
      
      <div class="modal-footer">
      <a href="{{url('/Product')}}" type="button" class="btn btn-secondary float-right">Back</a>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
      </div>
      @endsection

@section('scripts')
@endsection