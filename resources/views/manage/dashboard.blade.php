@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s Admin Dashboard</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <a href="{{ route('users.index') }}" class="btn btn-warning cardButton mb-1">    
                            <i class="fa fa-cog"></i>
                            Manage Users                         
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('users.create') }}" class="btn btn-warning cardButton mb-1">
                            <i class="fa fa-plus-square"></i>
                            &nbsp;Create New User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection