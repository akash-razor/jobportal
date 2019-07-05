@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Jobs</div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <tr>
                                <th>Description &nbsp</th>
                                <th>title &nbsp</th>
                                <th>company &nbsp</th>
                                <th>salary &nbsp</th>
                                <th>Work Experience Reuired (Years) &nbsp</th>
                                <th>Status &nbsp</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->company->name}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->work_exp}}</td>
                                    <td><a href="{{'/jobs/'.$job->id.'/applicants'}}">Check Applicants</a></td>
                                    <td><a href="{{'/jobs/'.$job->id.'/delete'}}">Delete</a></td>
                                    <td><a href="{{'/jobs/'.$job->id.'/edit'}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection