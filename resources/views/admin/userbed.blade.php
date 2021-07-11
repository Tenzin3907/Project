@extends('layoutss.master')

@section('title')
feedback | One More Time
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">bed</h4>
                
              </div>
              @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!---- Delete - Modal -->
<!-- Modal -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <input type="hidden" id="delete_bed_id">
          <h5>Are you sure.? you want to delete this data ?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">yes. Delete It.</button>
        </div>
      </form>
      </div>
  </div>
</div>
<!--end delete modal -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>id</th>
                      <th>title</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Dzongkhag</th>
                      <th>Image1</th>
                      <th>Image2</th>
                      <th>Image3</th>
                      <th>Image4</th>
                      <th>Name</th>
                      <th>Number</th>
                     
                    </thead>
                    @foreach($data as $i)
                    <tbody>
                        <td>{{$i->id}}</td>
                        <td>{{$i->title}}</td>
                        <td>{{$i->price}}</td>
                        <td>{{$i->description}}</td>
                        <td>{{$i->dzongkhag}}</td>
                        <td>                        
                          <img src="{{asset('uploadbed/bed1/' .$i->image1) }}" width="100px;" height="100px;" name="image1">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadbed/bed2/' .$i->image2) }}" width="100px;" height="100px;" name="image2">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadbed/bed3/' .$i->image3) }}" width="100px;" height="100px;" name="image3">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadbed/bed4/' .$i->image4) }}" width="100px;" height="100px;" name="image4">
                        </td>
                        <td>{{$i->name}}</td>
                        <td>{{$i->number}}</td>
                        <td>
                        <a href="javascript:void(0)" class="btn btn-danger deletebtn">Delete</a>
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
@section('scripts')
<script>
  $(document).ready(function (){
    $('#datatable').on('click','.deletebtn', function(){
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      $('#delete_bed_id').val(data[0]);

      $('#delete_modal_form').attr('action','/bed-delete/'+data[0]);

      $('#deletemodalpop').modal('show');
    });
  });
</script>
@endsection



