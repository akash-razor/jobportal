<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function apply($id){
        //return 'here';
        $job = Job::find($id);
        Auth::user()->entity->jobs()->save($job);
        return redirect('/user/show');
    }

    public function applicants($id){
        if(Auth::User()->entity->jobs->find($id)==null){
            return "404";
        }
        $applicants = Job::find($id)->applicants;
        return view('/jobs/applicants', compact('applicants'));
    }

    public function store(CreateJobRequest $request){
        $job = $request->all();
        $job['company_id'] = Auth::User()->entity->id;
        Job::create($job);
        return redirect('/user/show');
        //Job::create(['description'=>$request->description , 'title'=>$request->title , 'company_id'=>Auth::User()->entity->id, 'salary'=>$request->salary , 'work_exp'=>$request->work_exp]);
    }

    public function delete($id){
        if(Auth::user()->entity->jobs()->find($id)==null){
            return view('errors/404');
        }
        $job = Job::find($id);
        $job->applicants()->sync([]);
        $job->delete();
        return redirect('/user/show');
    }

    public function edit($id){
        $job = Job::find($id);
        return view('jobs/edit', compact('job'));
    }

    public function update(CreateJobRequest $request, $id){
        return $id;
    }
}
