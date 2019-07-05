<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
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
        if(Auth::User()->entity !=null){
            return redirect('/home');
        }
        if(Auth::User()->role==0){
            return view('company/create');
        }else{
            return view('applicant/create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        if(Auth::user()->role==0){
            $jobs = Auth::user()->entity->jobs;

            return view('company/show', compact('jobs'));
        }else{
            $jobs = Job::all();
            return view('applicant/show', compact('jobs'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return "here";
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

    public function create_job(){
        if(Auth::User()->entity->role!=0){
            return view('error/404');
        }
        return view('company/create_job');
    }

    public function search(){

        $search =  request()->q;
        $searches = explode(" ", $search);
        $jobs = Job::query();
        foreach($searches as $s){
            $jobs->orWhere('title', 'LIKE', "%{$s}%");
            $jobs->orWhere('description', 'LIKE', "%{$s}%");
        }
        $jobs = $jobs->distinct()->get();
//        $jobs = Job::where('title', 'LIKE', "%{$search}%")->orwhere('description', 'LIKE', "%{$search}%")->get();
//        return dd($jobs);
        //echo $search;
        return view('applicant/show', compact('jobs', 'search'));
        //return $jobs;
    }
}
