@extends('layouts.app')

@section('content')
<div class="container">
       <div class="ui big breadcrumb">
            <a class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a class="section">Registration</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Personal Information</div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
