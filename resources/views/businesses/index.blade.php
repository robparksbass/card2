@extends('layouts.app')
@section('content')
    <main class="row">
        <div class="col-12 businesses">
            <h1>Businesses</h1>
            <ul>
                @foreach ($businesses as $business)
                    <li>
                        <a href="/businesses/{{ $business->id }}">
                            {{ $business->business_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection