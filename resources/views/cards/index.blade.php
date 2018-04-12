@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s Membership Cards</div>
                <div class="card-body">
                <ul>
                    @foreach ($cards as $card)
                        @if ( $card->user_id == Auth::user()->id  )
                            <li>
                                <a href="/cards/{{ $card->id }}">
                                    {{ $card->business->business_name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
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