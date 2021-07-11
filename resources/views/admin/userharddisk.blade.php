@extends('layoutss.master')

@section('title')
feedback | One More Time
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header ">
                <h1 class="card-title">Harddisk</1>
                <a href="#harddisk"class=" float-right border border-dark">
               @foreach($data as $key=>$i)
                @endforeach
                <style>
                #app-cover
                {
                    height: 100%;
                }

                .notifications-count
                {
                    position: absolute;
                    top: 5px;
                    right: 10px;
                    width: 20px;
                    height: 20px;
                    color: #fff;
                    font-size: 17px;
                    font-family: Arial;
                    font-weight: bold;
                    text-align: center;
                    line-height: 1;
                    padding: 0 0;
                    background-color: #da3225;
                    border-radius: 100%;
                    box-shadow: 0 0 0 1px #32333b;
                    transform: scale(50);
                    opacity: 0;
                    transition: 0.3s cubic-bezier(0, 0.24, 0.86, 1.08) all;
                    z-index: 1;
                }

                .notifications-count.active
                {
                    transform: scale(1);
                    opacity: 1;
                }

                .notifications-count.zindex
                {
                    z-index: 3;
                }

                .icondiv
                {
                    position: absolute;
                    top: 10px;
                    right: 10px;     
                    margin: 0 auto;
                    background-color: #fff;
                    
                }
                </style>
                <div id="app-cover">
                  <div class="icondiv now-ui-icons ui-1_bell-53"></div>
                        <div class="notifications-count active zindex">{{$key+1}}</div>
                    
                  </div>
                </div>
                </a>
              </div>              

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
          <input type="hidden" id="delete_harddisk_id">
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
<style>

.w-10p{
width: 10% !important;
color: #40E0D0 ;
}
</style>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table table-dark table-striped table-bordered">
                    <thead class=" text-primary text-capitalize">
                      <th class="w-10p"><b><b>id</b></b></th>
                      <th class="w-10p"><b><b>Price</b></b></th>
                      <th class="w-10p"><b><b>Description</b></b></th>
                      <th class="w-10p"><b><b>Dzongkhag</b></b></th>
                      <th class="w-10p"><b><b>Image1</b></b></th>
                      <th class="w-10p"><b><b>Image2</b></b></th>
                      <th class="w-10p"><b><b>Image3</b></b></th>
                      <th class="w-10p"><b><b>Image4</b></b></th>
                      <th class="w-10p"><b><b>Name</b></b></th>
                      <th class="w-10p"><b><b>Number</b></b></th>
                      <th class="w-10p"><b><b>DELETE</b></b></th>
                     
                    </thead>
                    @foreach($data as $key => $i)
                    <tbody>
                        <td>{{$key + 1}}</td>
                        <td>{{$i->price}}</td>
                        <td>
                        <div style="height:80px; overflow: hidden;">
                          {{$i->description}}
                        </div>
                        </td>
                        <td>{{$i->dzongkhag}}</td>
                        <td>                        
                          <img src="{{asset('uploadharddisk/harddisk1/' .$i->image1) }}" width="100px;" height="100px;" name="image1">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadharddisk/harddisk2/' .$i->image2) }}" width="100px;" height="100px;" name="image2">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadharddisk/harddisk3/' .$i->image3) }}" width="100px;" height="100px;" name="image3">
                        </td>
                        <td>                        
                          <img src="{{asset('uploadharddisk/harddisk4/' .$i->image4) }}" width="100px;" height="100px;" name="image4">
                        </td>
                        <td>{{$i->name}}</td>
                        <td>{{$i->number}}</td>
                        <td>
                        <a href="delete-harddisk/{{$i->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
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

      $('#delete_harddisk_id').val(data[0]);

      $('#delete_modal_form').attr('action','/harddisk-delete/'+data[0]);

      $('#deletemodalpop').modal('show');
    });
  });
</script>
@endsection -->





