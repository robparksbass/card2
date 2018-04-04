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
                    <a href="cards">View your cards</a><br>
                    <a href="add">Add a New Card</a><br>
                    <a href="businesses">View participating businesses</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
