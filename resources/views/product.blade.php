@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Product Information per Kilo</h2>
            </div>
            <div class="pull-right">
                <a href="/admin/" class="btn btn-danger">Go Back</a>
            </div>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </div>
    </div>

    
    <form action="{{ route('addprod') }}" method="POST" enctype="multipart/form-data">

     {{csrf_field()}}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product:</strong>
                    <input type="text" name="product" class="form-control" placeholder="Product" value="{{ old('product') }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="input-group">
              <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input">
                  <label class="custom-file-label">Choose file</label>
              </div>  
                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

    </form>
    </div>
@endsection
