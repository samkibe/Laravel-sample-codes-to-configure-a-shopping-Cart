@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Clients</h2>
                


            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <form action="/edit-update/{{ $users->id}}" method="POST" >

        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $users->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{$users->email}}">
                </div>
            </div>
    
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/admin/" class="btn btn-danger">Cancel</a>
            </div>
        </div>

    </form>
    </div>
@endsection