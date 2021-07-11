@extends('layoutss.master')


@section('title')
    Registered Roles| One More Time

@endsection

@section('content')
<style>

.w-10p{
width: 10% !important;
color: #40E0D0 ;
}
</style>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Role</h4>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark">
                    <thead class="text-primary text-capitalize">
                      <th class="w-10p"><b><b>ID</b></b></th>
                      <th class="w-10p"><b><b>Name</b></b></th>
                      <th class="w-10p"><b><b>Address</b></b></th>
                      <th class="w-10p"><b><b>CID</b></b></th>
                      <th class="w-10p"><b><b>Email</b></b></th>
                      <th class="w-10p"><b><b>Usertype</b></b></th>
                      <th class="w-10p"><b><b>EDIT</b></b></th>
                      <th class="w-10p"><b><b>DELETE</b></b></th>
                    </thead>
                    <tbody>
                      @foreach($users as $key => $row)
                      <tr>
                      <td>{{$key + 1}}</td>  
                      <td>{{$row->name}}</td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->CID}}</td>
                        <td>{{$row->email}}</td>
                        <td>-{{$row->usertype}}</td>
                        @if($row->usertype=='admin')
                        <td>
                          <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                        </td>  
                        @else
                        <td>
                          <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                        </td>  
                        <td>
                          <form action="/role-delete/{{$row->id}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">DELETE</button>  
                          </form>
                        </td>  

                        @endif
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('scripts')


@endsection