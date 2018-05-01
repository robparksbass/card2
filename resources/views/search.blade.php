@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card littleCard">
                <div class="card-header">Search Results</div>
                <div class="card-body"> 
                    <div class="container">
                        @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <h2>Sample User details</h2>
                        <div class="row table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($details as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        Sorry, but no results were found.
                        @endif
                    </div>
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