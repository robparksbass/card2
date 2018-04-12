@extends('layouts.manage')
@include('includes.nav.manage')

@section('content')
<div class="flex-container">
    <div class="columns m-10-t">
        <div class="column">
            <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
            <a href="{{ route('users.create') }}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i>Create New User</a>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-content">
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
    {{ $users->links() }}
</div>
@endsection