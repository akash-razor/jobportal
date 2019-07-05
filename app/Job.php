<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = ['description', 'title', 'company_id', 'salary', 'work_exp'];
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function applicants(){
        return $this->belongsToMany('App\Applicant')->withPivot('status');
    }
}
