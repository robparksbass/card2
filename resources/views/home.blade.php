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
                    <div class="row justify-content-center">
                        <a href="{{ route('cards') }}" class="btn btn-outline-dark cardButton mb-1">
                            <i class="fa fa-address-card"></i>    
                            View your cards
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('add') }}" class="btn btn-outline-dark cardButton mb-1">
                            <i class="fa fa-plus-square"></i>    
                            Add a New Card
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('businesses') }}" class="btn btn-outline-dark cardButton">
                            <i class="fa fa-building"></i>
                            View businesses
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection