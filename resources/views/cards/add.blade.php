


@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a Card</div>
                <div class="card-body">
                @guest
        You must be logged in to access this feature<br>
        <a href="login">Login Now</a>
        @else
        <form action="/formAction" method="get">
            <div class="form-group">
                <label for="businessSelect">Which business would you like to add a card for?</label>
                <select class="form-control" id="businessSelect">
                    @foreach ( $businesses as $business )
                        <option value="{{$business->id}}">
                            {{ $business->business_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Card</button>
        </form>
        @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection