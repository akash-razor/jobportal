@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Applicants</div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <tr>
                                <th>Name</th>
                                <th>Work Experience</th>
                                <th>Email</th>
                                <th>Resume</th>
{{--                                <th>title &nbsp</th>--}}
{{--                                <th>company &nbsp</th>--}}
{{--                                <th>salary &nbsp</th>--}}
{{--                                <th>work_exp &nbsp</th>--}}
{{--                                <th>Status &nbsp</th>--}}
                            </tr>
                            @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{$applicant->user->name}}</td>
                                    <td>{{$applicant->work_exp." "}}Year(s)</td>
                                    <td>{{$applicant->user->email}}</td>
                                    @if($applicant->resume != null)
                                        <td><a href="{{'/resumes/'.$applicant->resume}}" download>Resume</a></td>
{{--                                        <td><img src="{{'/resumes/'.$applicant->resume}}"></td>--}}
                                    @else
                                        <td>Resume Not Uploaded</td>

                                    @endif
{{--                                    <td>{{$job->title}}</td>--}}
{{--                                    <td>{{$job->company->name}}</td>--}}
{{--                                    <td>{{$job->salary}}</td>--}}
{{--                                    <td>{{$job->work_exp}}</td>--}}
{{--                                    <td><a href="{{'/jobs/'.$job->id.'/applicants'}}">Check Applicants</a></td>--}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection