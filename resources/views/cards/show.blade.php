

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
                    <p><a href="/cards">Back to Cards</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection