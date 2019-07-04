@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/user/show" class="button">Show Posted Jobs</a>
                    <a href="/user/create_job" class="button">Post Job</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
