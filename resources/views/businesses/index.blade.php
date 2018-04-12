@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Businesses</div>

                <div class="card-body">
                <ul>
                @foreach ($businesses as $business)
                    <li>
                        <a href="/businesses/{{ $business->id }}">
                            {{ $business->business_name }}
                        </a>
                    </li>
                @endforeach
                </ul>
                @guest
                Create an account or login to access the full features.<br>
                <a href="/">Back to Home</a>
                @else
                <a href="home">Back to Portal</a>
                @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection