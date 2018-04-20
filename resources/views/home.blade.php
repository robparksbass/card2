@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Welcome to your Briefcase Portal, {{ Auth::user()->name }}!
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <i class="fa fa-address-card"></i>    
                        <a href="{{ route('cards') }}">View your cards</a><br>
                        <i class="fa fa-plus-square"></i>
                        <a href="{{ route('add') }}">Add a New Card</a><br>
                        <i class="fa fa-building"></i>
                        <a href="{{ route('businesses') }}">View participating businesses</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection