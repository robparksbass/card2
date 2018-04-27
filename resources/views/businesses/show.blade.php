
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Business Details</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-body businessCard">
                                <p>
                                    <strong>{{ $business->business_name }}</strong><br>
                                    {{ $business->address_line_1 }}<br>
                                    {{ $business->city}}, {{ $business->state}} {{ $business->zip_code }} <br>
                                </p>
                                <a href="{{ $business->google_maps_url }}" class="btn btn-outline-primary cardButton mb-1 mt-1" target="_blank">
                                    <i class="fa fa-map-marker"></i>
                                    Open in Google Maps
                                </a><br>
                                <a href="tel:{{ $business->phone }}" class="btn btn-outline-primary cardButton mb-1" >
                                    <i class="fa fa-phone-square"></i>
                                    {{ $business->phone }}
                                </a><br>
                                <a href="{{ $business->website_url }}" class="btn btn-outline-primary cardButton" target="_blank">
                                    <i class="fa fa-desktop"></i>
                                    Visit Website
                                </a>
                            </div>
                        </div>
                        

                        
                    </div>
                    <div class="row justify-content-center">
                        <a href="/businesses">
                            <button type="button" class="btn btn-success btn-sm mt-2">
                                <i class="fa fa-angle-double-left"></i>    
                                Back to Businesses
                            </button>
                        </a>
                    </div>
                    @guest
                    <div class="row justify-content-center">
                        <a href="/">
                            <button type="button" class="btn btn-primary btn-sm mt-1">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Home
                            </button>
                        </a>
                    </div>
                    <div class="row justify-content-center"> 
                        You must 
                        <a href="{{ route('register') }}">&nbsp;create an account&nbsp;</a>or
                        <a href="{{ route('login') }}">&nbsp;login</a>&nbsp;to access the full features of AMB.
                    </div>    
                    @else
                    <div class="row justify-content-center">
                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary btn-sm mt-2">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Portal
                            </button>
                        </a>
                    </div>    
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection