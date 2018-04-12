
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $business->business_name }}</div>

                <div class="card-body">
                <p>{{ $business->address_line_1 }}<br>
            {{ $business->city}}, {{ $business->state}} {{ $business->zip_code }} <br>
            <a href="{{ $business->website_url }}" target="_blank">Visit Website</a></p>
            <p><a href="/businesses">Back to Businesses</a></p>
                @guest
                Create an account or login to access the full features.<br>
                <a href="/">Back to Home</a>
                @else
                <a href="{{ route('home') }}">Back to Portal</a>
                @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection