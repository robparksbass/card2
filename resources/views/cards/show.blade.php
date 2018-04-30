@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $card->business->business_name }}</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card littleCard">
                                <div class="card-body">
                                    <div class="row justify-content-start mb-2">
                                        <strong>{{ Auth::user()->name }}</strong>&nbsp; is a member of &nbsp; <strong>{{ $card->business->business_name }}</strong>.<br>
                                    </div>  
                                    <div class="row justify-content-end">
                                        Issued on: {{ Carbon\Carbon::parse($card->valid_date)->format('F d, Y') }}<br>
                                        Expires on: {{ Carbon\Carbon::parse($card->expiration_date)->format('F d, Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="row justify-content-center">
                        <a href="/cards">
                            <button type="button" class="btn btn-success btn-sm mt-2">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Cards
                            </button>
                        </a>
                    </div>    
                    <div class="row justify-content-center">
                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary btn-sm mt-2">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Portal
                            </button>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection