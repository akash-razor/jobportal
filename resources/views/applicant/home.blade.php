@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="/user/search" method="get">
                            <input type="'text" name="q" placeholder="Search for jobs">
                            <input type="submit" value="Submit">
                        </form>
                        <a href="/user/show" class="button">Show all Jobs</a>
                        <a href="/user/applied_jobs" class="button">Applied Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
