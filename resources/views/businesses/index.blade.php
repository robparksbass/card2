@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Businesses</div>

                <div class="card-body">
                View business details for:
                    <ul>
                        @foreach ($businesses as $business)
                            <li>
                                <a href="/businesses/{{ $business->id }}">
                                    <button type="button" class="btn btn-outline-dark mb-1">
                                    <i class="fa fa-building"></i>
                                        {{ $business->business_name }}
                                    </button>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @guest
                    <div class="row justify-content-center"> You must 
                        <a href="{{ route('register') }}">&nbsp;create an account&nbsp;</a>or
                        <a href="{{ route('login') }}">&nbsp;login</a>&nbsp;to access the full features.<br>
                    </div>
                    <div class="row justify-content-center">
                        <a href="/">
                            <button type="button" class="btn btn-primary btn-sm mt-2">
                                <i class="fa fa-angle-double-left"></i>        
                                Back to Home
                            </button>
                        </a>
                    </div>    
                @else
                    <div class="row justify-content-center">
                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary btn-sm">
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