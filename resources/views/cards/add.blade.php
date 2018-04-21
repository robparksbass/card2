@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Add a Card
            </div>
            <div class="card-body row justify-content-center">
                @guest
                
                    You must be logged in to access this feature.
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
                    <div class="col-md-8">
                        <form action="/cards" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="businessSelect">
                                    Which business would you like to add a card for?
                                </label>
                                <select class="form-control" id="businessSelect" name="businessSelect">
                                    @foreach ($businesses as $business)
                                        <option value="{{$business->id}}">
                                            {{ $business->business_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <!-- <label for="issueDate">When was your card issued?</label><br>
                                <input type="text" name="issueDate" placeholder="Please enter the issue date"> -->
                            </div>
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-success btn-sm mb-2">
                                        <i class="fa fa-plus-square"></i>
                                        Add Card
                                    </button>
                                </div>
                                <div class="row justify-content-center"> 
                                    <a href="{{ route('home') }}">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-angle-double-left"></i>
                                            Back to Portal
                                        </button>
                                    </a>
                                </div>     
                        </form>
                    </div>        
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection