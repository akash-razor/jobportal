@extends('layouts.app')



@section('content')
    @if(isset($search))
        <form action="/user/search" method="get">
            <input type="'text" name="q" placeholder="Search for jobs">
            <input type="submit" value="Search">
        </form>
    @endif
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
                                <th>work_exp &nbsp</th>
                                <th>Status &nbsp</th>
{{--                                <th>Application Status &nbsp</th>--}}
                            </tr>
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->title}}</td>
                                    <td>{{$job->company->name}}</td>
                                    <td>{{$job->salary}}</td>
                                    <td>{{$job->work_exp}}</td>
                                    @if($job->applicants->find(Auth::User()->entity->id)==null)
                                        <td><a href="{{'/jobs/'.$job->id.'/apply'}}">Apply</a></td>
                                    @else
                                        <td>Applied</td>
                                    @endif
{{--                                    <td>{{Auth::User()->entity->jobs()->find($job->id)->pivot->status}}</td>--}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection