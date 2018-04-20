

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $card->business->business_name }}</div>
                <div class="card-body">
                    Valid on: {{ $card->valid_date }}<br>
                    Expires on: {{ $card->expiration_date }}<br>
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