
@extends('layoutss.master')

@section('title')
feedback | One More Time
@endsection

@section('content')
<div class="container">
<div class="col-ms-3">
            <div class="card">
               
              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead class=" text-capitalize">
                    <th class="w-10p"><b><b>Item-No.</b></b></th>
                      <th class="w-10p"><b><b>Brand</b></b></th>
                      <th class="w-10p"><b><b>Price</b></b></th>
                      <th class="w-10p"><b><b>Dzongkhag</b></b></th>
                      <th class="w-10p"><b><b>Approve</b></b></th>
                      <th class="w-10p"><b><b>Image1</b></b></th>
                      <th class="w-10p"><b><b>Name</b></b></th>
                      <th class="w-10p"><b><b>Number</b></b></th>
                      <th class="w-10p"><b><b>DELETE</b></b></th>
                     
                    </thead>
                    @foreach($cameras as $key =>$data)
                    <tbody>
                    <td>{{$key+1}}</td>
                        <td>{{$data->brand}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->dzongkhag}}</td>
                        <td><form onsubmit="return confirm('Are you sure want to approve this post')" action="{{route('book_approval')}}" method="POST">
                        @csrf
                        <div class="form-group form-check">
                                <input type="radio" name="approve" <?php if($data->approve == 1){echo "checked";}?>  >
                                <input type="hidden" name="postId" value="{{$data->id}}">
                            
                                <input type="submit" class="btn btn-info btn-sm" value="Approve">
                                
                            </div>
                     </form>
                    </td>
                        <td>                        
                        <img src="{{asset('uploadbook/book1/' .$data->image1) }}" width="100px;" height="100px;" name="image1">
                        </td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->number}}</td>
                        <td>
                        <a href="delete-book/{{$data->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
                      </td>
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection





