<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Http\Requests\ApplicantCreateRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicantCreateRequest $request)
    {
        //
//        $file = $request->file('resume');
//
//        echo $file->getClientOriginalName();
//
//        return ;
        $applicant =  $request->all();
        $applicant['user_id'] = Auth::User()->id;
        if($file = $request->file('resume')){
            $name = $file->getClientOriginalName().time();
            $file->move('resumes', $name);
            $applicant['resume'] = $name;

        }
        Applicant::create($applicant);
        return redirect('/user/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function applied(){
        $jobs = Auth::User()->entity->jobs;
        return view('applicant/show', compact('jobs'));
    }
}
