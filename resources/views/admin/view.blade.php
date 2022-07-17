
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h4>Kibegroceries clients list</h4>
                </div>

                <div class="float-rightpull-right">
                    <a class="btn btn-success float-right" href="{{route('product')}}" title="Create a product"> Add New Product information </a>
                </div>
                <div class="float-rightpull-right">
                    <a class="btn btn-success float-right" href="{{route('displayprod')}}" title="Create a product"> View Product information </a>
                </div>
                <div class="float-rightpull-right">
                    <a class="btn btn-success float-right" href="{{route('shoppingCart')}}" title="Create a product"> View Client Orders </a>
                </div>
              
            </div>
        </div>

        @if (Session('status'))
            <div class="alert alert-success" role="alert">
               { { session('status') }}
            </div>
        @endif

        <table class="table table-bordered table-responsive-lg">

        
               <tr>
               <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                
</tr>
            <tbody>
            @foreach ($users as $row)
            <tr>
            <td> {{ $row->id }}</td>
          <td> {{ $row->name }}</td>
          <td> {{$row->email}}</td>
          <td> {{$row->created_at}}</td>
                    <td>
                        <a href="/edit/{{$row->id}}" class= "btn btn-success">EDIT</a>
                    </td>
                    <td>
                        <form action="/delete/{{$row->id}}" method="post">
                    
                         {{ csrf_field ()}}
                       {{method_field('DELETE')}}

                       <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
</table>
    </div>
@endsection
