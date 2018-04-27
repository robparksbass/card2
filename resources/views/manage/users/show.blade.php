@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View User Details</div>
                <div class="card-body">
                    <div class="row">
                        <strong class="ml-3">Name:</strong>&nbsp;{{ $user->name }}       
                    </div>
                    <div class="row">
                        <strong class="ml-3">Email:</strong>&nbsp;{{ $user->email }}
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm mt-3">
                            <i class="fa fa-edit"></i>
                            Edit User
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('manage.dashboard') }}" class="btn btn-primary btn-sm mt-1">
                            <i class="fa fa-angle-double-left"></i>
                            Back to Admin Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection