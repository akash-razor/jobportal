@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Job Info</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ '/jobs/create' }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descrption</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                                <label for="salary" class="col-md-4 control-label">Salary</label>

                                <div class="col-md-6">
                                    <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}">

                                    @if ($errors->has('salary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('work_exp') ? ' has-error' : '' }}">
                                <label for="work_exp" class="col-md-4 control-label">Work Experience</label>

                                <div class="col-md-6">
                                    <input id="work_exp" type="text" class="form-control" name="work_exp" value="{{ old('work_exp') }}">

                                    @if ($errors->has('work_exp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('work_exp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            {{--                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--                                <label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <input id="password" type="password" class="form-control" name="password">--}}

                            {{--                                    @if ($errors->has('password'))--}}
                            {{--                                        <span class="help-block">--}}
                            {{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
                            {{--                                    </span>--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--                                <div class="col-md-6">--}}
                            {{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">--}}

                            {{--                                    @if ($errors->has('password_confirmation'))--}}
                            {{--                                        <span class="help-block">--}}
                            {{--                                        <strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                            {{--                                    </span>--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
