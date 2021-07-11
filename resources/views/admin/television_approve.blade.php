
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
                    <!---- Delete - Modal -->
<!-- Modal -->
<!-- <div class="modal fade" id="deletemodalpop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_modal_form" method="POST">
            {{csrf_field() }}
            {{method_field('DELETE') }}
            
        <div class="modal-body">
          <input type="hidden" id="delete_camera_id">
          <h5>Are you sure.? you want to delete this data ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">yes. Delete It.</button>
        </div>
      </form>
      </div>
  </div>
</div> -->
<!--end delete modal -->

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
                    @foreach($cameras as $key => $data)
                    <tbody>
                    <td>{{$key+1}}</td>
                        <td>{{$data->brand}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->dzongkhag}}</td>
                        <td><form onsubmit="return confirm('Are you sure want to approve this post')" action="{{route('television_approval')}}" method="POST">
                        @csrf
                        <div class="form-group form-check">
                                <input type="radio" name="approve" <?php if($data->approve == 1){echo "checked";}?>  >
                                <input type="hidden" name="postId" value="{{$data->id}}">
                            
                                <input type="submit" class="btn btn-info btn-sm" value="Approve">
                                
                            </div>
                     </form>
                    </td>
                        <td>                        
                        <img src="{{asset('uploadtelevision/television1/' .$data->image1) }}" width="100px;" height="100px;" name="image1">
                        </td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->number}}</td>
                        <td>
                        <!-- <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a> -->
                        <a href="delete-television/{{$data->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>

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
<!-- @section('scripts')
<script>
  $(document).ready(function (){
    $('#datatable').on('click','.deletebtn', function(){
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      $('#delete_camera_id').val(data[0]);

      $('#delete_modal_form').attr('action','/camera-delete/'+data[0]);

      $('#deletemodalpop').modal('show');
    });
  });
</script>
@endsection -->




