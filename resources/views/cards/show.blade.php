@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>{{ $card->id }}</h2>
            <p><a href="/cards">Back to Cards</a></p>
        </div>
    </div>
@endsection