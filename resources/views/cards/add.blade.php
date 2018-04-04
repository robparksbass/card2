@extends('layouts.app')
@section('content')
<main class="row">
    <div class="col-12">
        @guest
        You must be logged in to access this feature<br>
        <a href="login">Login Now</a>
        @else
        <form action="#" method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    @foreach ($businesses as $business)
                        <option>                  
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