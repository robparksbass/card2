@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Asheville Membership Briefcase</div>
                <div class="card-body">
                    AMB's apologies, but this is not a valid page.
                    <div class="row justify-content-center">
                        <a href="{{ route('home') }}">
                            <button type="button" class="btn btn-primary btn-sm mt-1">
                                <i class="fa fa-angle-double-left"></i>
                                Back to Portal
                            </button>
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection