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
                        @if (count($businesses) == 0)
                            <div class="row justify-content-center mb-3">
                                You already have cards for all the participating businesses.  Please check back soon as we partner with more of your favorite private clubs!
                            </div>
                        @else
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
                            </div>              
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Issue Date:</label>
                                <input type="text" class="form-control" name="issueDate" id="datepicker" placeholder="Click to select the Card's Issue Date" required>
                            </div>          
                                        <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-success btn-sm mb-2">
                                        <i class="fa fa-plus-square"></i>
                                        Add Card
                                    </button>
                                </div>
                        </form>
                        @endif
                        <div class="row justify-content-center"> 
                            <a href="{{ route('cards') }}" class="btn btn-primary btn-sm tn mt-2 mb-1 topButton">                                
                                <i class="fa fa-angle-double-left"></i>
                                Back to Cards
                            </a>
                        </div>     
                        <div class="row justify-content-center"> 
                            <a href="{{ route('home') }}" class="btn btn-primary btn-sm bottomButton">                                
                                <i class="fa fa-angle-double-left"></i>
                                Back to Portal
                            </a>
                        </div>     
                    </div>        
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection