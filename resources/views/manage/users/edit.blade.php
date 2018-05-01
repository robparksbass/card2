@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User Details</div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="input" name="name" id="name" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="input" name="email" id="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                                Edit User
                            </button>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm mt-1">
                            <i class="fa fa-angle-double-left"></i>
                            Back to Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>               
</div>            
@endsection