@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>{{ $card->business->business_name }}</h2>
            Valid on: {{ $card->valid_date }}<br>
            Expires on: {{ $card->expiration_date }}<br>
            <p><a href="/cards">Back to Cards</a></p>
        </div>
    </div>
@endsection