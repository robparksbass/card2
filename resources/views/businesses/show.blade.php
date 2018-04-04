@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>{{ $business->business_name }}</h2>
            <p>{{ $business->address_line_1 }}<br>
            {{ $business->city}}, {{ $business->state}} {{ $business->zip_code }} <br>
            <a href="{{ $business->website_url }}" target="_blank">Visit Website</a></p>
            <p><a href="/businesses">Back to Businesses</a></p>
        </div>
    </div>
@endsection