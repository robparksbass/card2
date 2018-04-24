
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                <div class="card-header">Welcome to AMB</div>
                @else
                <div class="card-header">Welcome to your Briefcase Portal, {{ Auth::user()->name }}!</div>
                @endguest
                <div class="card-body">
                    @guest
                    <p>Welcome to the Asheville Membership Briefcase.  Say goodbye to piles of paper membership cards and hello to your one-stop web application for storing all of your membership information! </p>
                    <p>Take a look at the participating businesses and create a free account to get started!</p>
                    <div class="row justify-content-center">
                        <a href="businesses">
                            <button type="button" class="btn btn-success mb-1">
                                View participating businesses
                            </button>
                        </a>  
                    </div>
                    <div class="row justify-content-center">
                        <a href="login">
                            <button type="button" class="btn btn-primary mb-1">
                                Sign In to your Account
                            </button>
                        </a>
                    </div> 
                    <div class="row justify-content-center">
                        <a href="register">
                            <button type="button" class="btn btn-primary">
                                Register for a New Account
                            </button>                     
                        </a>       
                    </div>                        
                    @else
                        <i class="fa fa-address-card"></i>    
                        <a href="{{ route('cards') }}">View your cards</a><br>
                        <i class="fa fa-plus-square"></i>
                        <a href="{{ route('add') }}">Add a New Card</a><br>
                        <i class="fa fa-building"></i>
                        <a href="{{ route('businesses') }}">View participating businesses</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection