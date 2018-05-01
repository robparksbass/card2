@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card littleCard">
                <div class="card-header">Users</div>
                <div class="card-body"> 
                    <div class="row justify-content-center mb-2">
                        <div class="card">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search users" required> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>   
                        </div>
                    </div>
                    <div class="table-responsive row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>    
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th>{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}

                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('users.create') }}" class="btn btn-success btn-sm mb-1">
                            <i class="fa fa-plus-square"></i>
                            &nbsp;Create New User
                        </a>
                    </div>
                    <div class="row justify-content-center">
                            <a href="{{ route('manage.dashboard') }}" class="btn btn-primary btn-sm">
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