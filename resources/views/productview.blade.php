@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Information per Kilo</h2>
            </div>
            <div class="pull-right">
                <a href="/product/" class="btn btn-danger">Go Back add</a>
                <a href="/admin/" class="btn btn-danger">Go Back</a>
            </div>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg">

                        
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                
              
                <th>image</th>
          </tr>
        <tbody>
    @foreach ($products as $product)
         <tr>
                 <td> {{$product->id }}</td>
                <td> {{ $product->product}}</td>
                <td> {{$product->price}}</td>
                <td> <img src="{{ asset('storage/' . $product->image) }}" width="100px;" height= "50px"alt="image"></td>
            <td>
           <a href="/editimage/{{$product->id}}" class= "btn btn-success">EDIT</a>
                    </td>
                    
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                @endsection

                    