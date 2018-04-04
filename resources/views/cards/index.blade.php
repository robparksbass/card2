@extends('layouts.app')
@section('content')
    <main class="row">
        <div class="col-12 cards">
            <h1>{{ Auth::user()->name }}'s Membership Cards</h1>
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
        </div>
    </main>
@endsection