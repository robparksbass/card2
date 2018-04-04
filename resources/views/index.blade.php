
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @guest
                <div class="card-header">Welcome to the Asheville Membership Briefcase</div>
                @else
                <div class="card-header">Welcome to your Briefcase Portal, {{ Auth::user()->name }}!</div>
                @endguest
                <div class="card-body">
                    @guest
                    <a href="businesses">View participating businesses</a><br>
                    <a href="login">Sign In to your Account</a><br>
                    <a href="register">Register for a New Account</a>
                    @else
                    <a href="{{ route('cards') }}">View your cards</a><br>
                    <a href="{{ route('add') }}">Add a New Card</a><br>
                    <a href="{{ route('businesses') }}">View participating businesses</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




