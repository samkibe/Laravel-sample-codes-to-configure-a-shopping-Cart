@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to KibeGroceries') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is our dashboard! Thank you for registering, NOW!! LOGOUT and Officialy Login to access our services. Thank you for choosing Kibe groceries!!!!!') }}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
