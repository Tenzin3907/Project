@extends('layoutss.master')

@section('title')
Product | One More Time
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Product Details</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>  
    </div>
  </div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Product</h4>
                
                <a href="/FormAdd" type="button" class="btn btn-primary float-right">Add</a>
              </div>

              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
             <style>

                    .w-10p{
                    width: 10% !important;
                    color: #40E0D0 ;
                  }
              </style>

              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-dark ">
                    <thead class=" text-primary text-capitalize">
                   
                     <th class="w-10p"><b><b>id</b></b></th>
                      <th class="w-10p"><b><b>PName </b></b></th>
                      <th class="w-10p"><b><b>Price</th>
                      <th class="w-10p"><b><b>Discription</b></b></th>
                      <th class="w-10p"><b><b>Image</b></b></th>
                      <th class="w-10p"><b><b>Image1</b></b></th>
                      <th class="w-10p"><b><b>Image2</b></b></th>
                      <th class="w-10p"><b><b>Image3</b></b></th>
                      <th class="w-10p"><b><b>EDIT</b></b></th>
                      <th class="w-10p"><b><b>DELETE</b></b></th>
                    </thead>
                   
                    <tbody>
                    @foreach ($Product as $key=>$data)
                      <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$data->PName}}</td>
                        <td> {{$data->Price}}</td>
                        <td>
                        <div style="height:80px; overflow: hidden;">
                              {{$data->Discription}}
                        </div>
                        </td>
                        <td>                        
                          <img src="{{asset('uploads/Product/' .$data->Image) }}" width="100px;" height="100px;" name="Image">
                        </td>
                        <td>                        
                          <img src="{{asset('uploads/Product1/' .$data->Image1) }}" width="100px;" height="100px;" name="Image1">
                        </td>
                        <td>                        
                         <img src="{{asset('uploads/Product2/' .$data->Image2) }}" width="100px;" height="100px;" name="Image2">
                        </td>
                        <td>                        
                          <img src="{{asset('uploads/Product3/' .$data->Image3) }}" width="100px;" height="100px;" name="Image3">
                        </td>
                        <td>
                            <a href="{{ url('Proudct-us/'.$data->id) }}" class="btn btn-success">EDIT</a>
                        </td>
                      <td>
                      <a href="delete-product/{{$data->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                     @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


 