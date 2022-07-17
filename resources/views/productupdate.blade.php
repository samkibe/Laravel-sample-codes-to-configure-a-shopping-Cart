@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit products</h2>

            </div>
           
            <div class="pull-right">
                <a href="/displayprod/" class="btn btn-danger">Go Back</a>
               
            </div>

        </div>
    </div>

    <form action="/updateimage/{{ $products->id}}" method="POST" enctype="multipart/form-data">

        {{csrf_field()}}
        {{method_field('PUT')}}


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product:</strong>
                    <input type="text" name="product" class="form-control" placeholder="product" value="{{ $products->product}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="price" value="{{$products->price}}">
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="input-group">
              <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" value="{{$products->image}}">
                  <label class="custom-file-label">Choose file</label>
              </div>  

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/displayprod/" class="btn btn-danger">Cancel</a>
            </div>
        </div>

    </form>
    </div>
@endsection