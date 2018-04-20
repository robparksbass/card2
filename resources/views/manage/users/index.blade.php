@extends('layouts.app')
@section('content')
div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <table class="table is-narrow">
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
                        <td><a class="button is-outlined" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection