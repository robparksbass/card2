@extends('layouts.default')
@section('content')
    <main class="row">
        <div class="col-12 businesses">
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
@stop