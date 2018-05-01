@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   Assets
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ URL::to('assets1/database-final.sql') }}">SQL Dump</a></li>
                        <li><a href="{{ URL::to('assets1/erd.png') }}" target="_blank">ERD</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection