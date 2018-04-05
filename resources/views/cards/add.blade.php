@extends('layouts.app')
@section('content')
<main class="row">
    <div class="col-12">
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
</main>
@endsection