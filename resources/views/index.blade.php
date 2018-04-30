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
                                <button type="button" class="btn btn-success mb-1 cardButton">
                                    <i class="fa fa-building"></i>
                                    View businesses
                                </button>
                            </a>  
                        </div>
                        <div class="row justify-content-center">
                            <a href="login">
                                <button type="button" class="btn btn-primary mb-1 cardButton">
                                    <i class="fa fa-arrow-circle-right"></i>
                                    Sign In to your Account
                                </button>
                            </a>
                        </div> 
                        <div class="row justify-content-center">
                            <a href="register">
                                <button type="button" class="btn btn-primary cardButton">
                                    <i class="fa fa-plus-square"></i>
                                    Register for a New Account
                                </button>                     
                            </a>       
                        </div>                        
                    @else
                        <div class="row justify-content-center">
                            <a href="{{ route('cards') }}" class="btn btn-primary cardButton mb-1">
                                <i class="fa fa-address-card"></i>    
                                View your cards
                            </a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('add') }}" class="btn btn-primary cardButton mb-1">
                                <i class="fa fa-plus-square"></i>    
                                Add a New Card
                            </a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('businesses') }}" class="btn btn-primary cardButton">
                                <i class="fa fa-building"></i>
                                View businesses
                            </a>
                        </div>    
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection