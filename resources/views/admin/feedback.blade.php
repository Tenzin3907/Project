@extends('layoutss.master')

@section('title')
feedback | One More Time
@endsection

@section('content')
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
        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete_modal_form" method="POST">
            {{csrf_field() }}
            {{method_field('DELETE') }}
            
        <div class="modal-body">
          <input type="hidden" id="delete_feedback_id">
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

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">feedback</h4>

              </div>
              <style>

.w-10p{
width: 10% !important;
color: #40E0D0 ;
}
</style>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark table-striped table-bordered">
                    <thead class=" text-primary text-capitalize">
                      <th class="w-10p"><b><b>id</b></b></th>
                      <th class="w-10p"><b><b>email</b></b></th>
                      <th class="w-10p"><b><b>feedback</b></b></th>
                      <th class="w-10p"><b><b>message</b></b></th>
                      <th class="w-10p"><b><b>DELETE</b></b></th>
                     
                    </thead>
                    <tbody>
                    @foreach ($feedback as $key => $row)
                      <tr>
                      <td>{{$key + 1}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->feedback}}</td>
                        <td>{{$row->message}}</td>
                        <td>
                            <form action="/feedback-delete/{{ $row->id }}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="delete-feedback/{{$row->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
                            </form>
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
<!-- @section('scripts')
<script>
  $(document).ready(function (){
    $('#datatable').on('click','.deletebtn', function(){
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      $('#delete_feedback_id').val(data[0]);

      $('#delete_modal_form').attr('action','/feedback-delete/'+data[0]);

      $('#deletemodalpop').modal('show');
    });
  });
</script>
@endsection -->