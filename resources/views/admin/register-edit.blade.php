@extends('layoutss.master')


@section('title')
    Edit-Registered | One More Time

@endsection

@section('content')

<div class="conatiner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h1>Edit Role for Registered User</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            @if ($users->usertype=='admin')
                            <form action="/role-register-update/{{ $users->id }}" method="POST">
                               {{ csrf_field() }} 
                               {{ method_field('PUT') }}

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="username" value="{{$users->name}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$users->address}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CID</label>
                                <input type="text" name="CID" value="{{$users->CID}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$users->email}}" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/role-register" class="btn btn-danger">Cancel</a>
                        </form>
                        @else
                            <form action="/role-register-update/{{ $users->id }}" method="POST">
                               {{ csrf_field() }} 
                               {{ method_field('PUT') }}

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="username" value="{{$users->name}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$users->address}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CID</label>
                                <input type="text" name="CID" value="{{$users->CID}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$users->email}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select name="usertype" class="form-control">
                                    <option value="#"></option>
                                    <option value="admin">Admin</option>
                                    <option value="Buyer">Buyer</option>
                                    <option value="Seller">Seller</option>
                                </select>
                            </div>
                            </div>
                        </div>
                            
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="/role-register" class="btn btn-danger">Cancel</a>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')


@endsection