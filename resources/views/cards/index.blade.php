@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s Membership Cards</div>
                <div class="card-body">
                @guest
                    Create an account or login to access the full features.<br>
                    <a href="/">Back to Home</a>
                @else
                    <div class="row justify-content-center">
                        <ul>
                            @foreach ($cards as $card)                               
                                <li>
                                    <a href="/cards/{{ $card->id }}"> 
                                        <button type="button" class="btn btn-outline-dark mb-1 cardButton">
                                            <i class="fa fa-address-card"></i>    
                                            {{ $card->business->business_name }}
                                        </button>
                                    </a>
                                </li>                                                      
                            @endforeach
                        </ul>
                        @if (count($cards) == 0)
                                You don't currently have any membership cards.  Add a new card!
                        @endif
                    </div>                 
                    {{ $cards->links() }}                    
                    <div class="row justify-content-center">
                        <a href="{{ route('add') }}" class="btn btn-primary mt-3 mb-1 ">
                                <i class="fa fa-plus-square"></i>
                                Add a New Card
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('home') }}" class="btn btn-primary">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Portal
                        </a>
                    </div>    
                @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection