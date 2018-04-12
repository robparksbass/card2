@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to your Briefcase Portal, {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('cards') }}">View your cards</a><br>
                    <a href="{{ route('add') }}">Add a New Card</a><br>
                    <a href="{{ route('businesses') }}">View participating businesses</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection