@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders</h2>
            </div>
            <div class="pull-right">
                <a href="/admin/" class="btn btn-danger">Admin Dashboard</a>

                <table class="table table-hover">
                <thead>
                <tr>
                    <th width="10%">Order_ID</th>
                    <th width="10%">Date ordered</th>
                    <th width="8%">Customer_ID</th>
                    <th width="20%">Cart information</th>
                    <th width="10%"></th>
                </tr>
                </thead>

                @foreach ($orders as $row)
         <tr>
                 <td> {{$row->id }}</td>
                <td> {{ $row->created_at}}</td>
                <td> {{$row->user_id}}</td>
                <td> {{$row->cart}}</td>
                
                
                <td>
                        <form action="/delete/{{$row->id}}" method="post">
                    
                         {{ csrf_field ()}}
                       {{method_field('DELETE')}}

                       <button type="submit" class="btn btn-danger">DELETE order</button>
                    </form>
                    </td>
                    
                </tr>
                @endforeach
                </tbody>
                </table>

               

</div></div></div>
</div>
@endsection

